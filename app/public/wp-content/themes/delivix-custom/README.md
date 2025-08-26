# Delivix Custom WordPress Theme

A modern, high-performance WordPress theme built with Bootstrap, GSAP, and Flickity. Designed for professional digital agencies and modern businesses.

## 🚀 Features

### Core Features
- **Modern Design**: Clean, professional design inspired by modern digital agencies
- **Fully Responsive**: Mobile-first responsive design with Bootstrap 5
- **Advanced Animations**: Smooth GSAP animations with ScrollTrigger
- **Interactive Carousels**: Touch-friendly carousels with Flickity
- **Custom Post Types**: Portfolio, Case Studies, Team, Testimonials
- **Custom Fields**: Comprehensive meta boxes for all post types
- **Widget Areas**: Multiple sidebar and footer widget areas
- **SEO Optimized**: Clean, semantic HTML structure
- **Accessibility Ready**: WCAG 2.1 AA compliant

### Technical Features
- **WordPress 6.0+ Compatible**: Latest WordPress features and standards
- **PHP 7.4+**: Modern PHP features and security
- **Bootstrap 5.3.0**: Latest Bootstrap framework
- **GSAP 3.12.2**: Professional animation library
- **Flickity 2.3.0**: Touch-friendly carousel library
- **Font Awesome 6.4.0**: Comprehensive icon library
- **Google Fonts**: Inter and Poppins typography

## 📁 File Structure

```
delivix-custom/
├── assets/
│   ├── css/           # Custom CSS files
│   ├── js/            # JavaScript files
│   ├── images/        # Theme images
│   └── fonts/         # Custom fonts
├── inc/               # Include files
│   ├── theme-setup.php
│   ├── custom-post-types.php
│   ├── custom-fields.php
│   └── theme-functions.php
├── template-parts/    # Template parts
│   ├── components/    # Reusable components
│   ├── content/       # Content templates
│   └── layout/        # Layout templates
├── page-templates/    # Custom page templates
├── functions.php      # Main theme functions
├── style.css          # Main stylesheet
├── index.php          # Main template
├── header.php         # Header template
├── footer.php         # Footer template
├── sidebar.php        # Sidebar template
└── README.md          # This file
```

## 🎨 Design System

### Color Palette
- **Primary Blue**: #1e3a8a
- **Primary Dark**: #1e40af
- **Primary Light**: #3b82f6
- **Secondary Gray**: #6b7280
- **Accent Blue**: #2563eb
- **Neutral Grays**: Full gray scale from #f9fafb to #111827

### Typography
- **Primary Font**: Inter (300, 400, 500, 600, 700)
- **Secondary Font**: Poppins (300, 400, 500, 600, 700)
- **Monospace Font**: JetBrains Mono

### Spacing System
- **Base Unit**: 4px (0.25rem)
- **Scale**: xs(4px), sm(8px), md(16px), lg(24px), xl(32px), 2xl(48px), 3xl(64px)

## 🛠️ Installation

### 1. Upload Theme
1. Download the theme files
2. Upload to `/wp-content/themes/delivix-custom/`
3. Activate the theme in WordPress admin

### 2. Required Plugins
- **Advanced Custom Fields (ACF)**: For custom fields (recommended)
- **Contact Form 7**: For contact forms
- **Yoast SEO**: For SEO optimization

### 3. Setup
1. Go to **Appearance > Customize**
2. Configure hero section content
3. Set up navigation menus
4. Configure widget areas

## 📝 Custom Post Types

### Portfolio
- **Fields**: Client name, project date, URL, technologies, duration, budget, description, challenges, solutions, results
- **Taxonomies**: Categories, Tags

### Case Studies
- **Fields**: Client industry, project scope, timeline, team size, technologies, key metrics, lessons learned
- **Taxonomies**: Categories, Industries

### Team Members
- **Fields**: Job title, department, experience, skills, social media links
- **Taxonomies**: Departments

### Testimonials
- **Fields**: Client name, title, company, website, rating, project type
- **Taxonomies**: None

## 🎭 Animations

### GSAP Animations
- **Hero Animations**: Staggered entrance animations
- **Scroll Triggers**: Reveal animations on scroll
- **Parallax Effects**: Smooth parallax scrolling
- **Interactive Elements**: Hover and click animations

### CSS Animations
- **Fade In**: Smooth opacity transitions
- **Slide In**: Directional slide animations
- **Scale**: Transform scale effects
- **Hover Effects**: Interactive hover states

## 🚗 Carousels

### Flickity Integration
- **Touch Support**: Mobile-friendly touch gestures
- **Responsive**: Adaptive to different screen sizes
- **Custom Navigation**: Previous/next buttons
- **Auto-play**: Configurable auto-play options

## 📱 Responsive Design

### Breakpoints
- **Mobile**: < 576px
- **Small**: ≥ 576px
- **Medium**: ≥ 768px
- **Large**: ≥ 992px
- **Extra Large**: ≥ 1200px
- **Extra Extra Large**: ≥ 1400px

### Mobile-First Approach
- Start with mobile design
- Scale up to larger screens
- Touch-friendly interactions
- Optimized performance

## 🔧 Customization

### Theme Customizer
- **Hero Section**: Title, subtitle, image
- **Footer**: Description text
- **Colors**: Primary and accent colors
- **Typography**: Font selections

### Custom CSS
- Use WordPress Customizer
- Add to `style.css`
- Child theme recommended for updates

### Hooks and Filters
- Extensive WordPress hooks
- Custom action hooks
- Filterable content
- Extensible architecture

## 📊 Performance

### Optimization Features
- **Lazy Loading**: Images and components
- **Minified Assets**: CSS and JavaScript
- **Efficient Queries**: Optimized database calls
- **Caching Ready**: Compatible with caching plugins

### Best Practices
- **Semantic HTML**: Proper HTML structure
- **CSS Variables**: Consistent design tokens
- **Modular JavaScript**: Organized code structure
- **Accessibility**: WCAG 2.1 AA compliance

## 🔒 Security

### Built-in Security
- **Nonce Verification**: CSRF protection
- **Data Sanitization**: Input validation
- **Permission Checks**: User capability verification
- **SQL Injection Prevention**: Prepared statements

### WordPress Standards
- **Coding Standards**: WordPress PHP standards
- **Security Best Practices**: WordPress security guidelines
- **Regular Updates**: Keep theme updated

## 🌐 Browser Support

### Supported Browsers
- **Chrome**: Latest 2 versions
- **Firefox**: Latest 2 versions
- **Safari**: Latest 2 versions
- **Edge**: Latest 2 versions
- **Internet Explorer**: 11+ (limited support)

### Progressive Enhancement
- Core functionality works without JavaScript
- Enhanced experience with modern browsers
- Graceful degradation for older browsers

## 📚 Documentation

### Code Documentation
- **Inline Comments**: Detailed code explanations
- **Function Documentation**: PHPDoc blocks
- **Template Structure**: Clear file organization
- **Hook Reference**: Available hooks and filters

### Development Guide
- **Theme Development**: Building custom templates
- **Component Creation**: Reusable components
- **Animation Setup**: GSAP configuration
- **Custom Fields**: Adding new meta boxes

## 🤝 Support

### Getting Help
1. **Documentation**: Check this README first
2. **Code Comments**: Review inline documentation
3. **WordPress Codex**: WordPress development resources
4. **Community**: WordPress developer community

### Contributing
1. **Fork Repository**: Create your own fork
2. **Feature Branch**: Work on feature branches
3. **Code Standards**: Follow WordPress standards
4. **Pull Request**: Submit changes for review

## 📄 License

This theme is licensed under the GPL v2 or later.

## 🚀 Changelog

### Version 1.0.0
- Initial theme release
- Bootstrap 5 integration
- GSAP animations
- Flickity carousels
- Custom post types
- Responsive design
- WordPress 6.0+ compatibility

## 🙏 Credits

- **Bootstrap**: CSS framework
- **GSAP**: Animation library
- **Flickity**: Carousel library
- **Font Awesome**: Icon library
- **Google Fonts**: Typography
- **WordPress**: CMS platform

---

**Built with ❤️ for modern WordPress development**
