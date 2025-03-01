# Personal Portfolio Website

A dynamic personal portfolio website built with Laravel, featuring a responsive design and content management capabilities. This project allows you to showcase your professional experience, projects, skills, and educational background through an elegant and interactive interface.

## Features

- **Dynamic Content Management**
    - Projects showcase with thumbnails and live links
    - Professional experience timeline
    - Skills and languages proficiency
    - Educational background
    - About section with social media links
    - Add Dynamic SEO property for all the pages

- **Interactive Components**
    - Responsive navigation
    - Contact form with validation
    - Project cards with preview links
    - Professional timeline layout
    - Social media integration

- **Technical Features**
    - Laravel backend
    - MySQL database
    - AJAX-powered content loading
    - Responsive Bootstrap design
    - Clean and maintainable codebase


## Installation

1. Clone the repository

```bash
git clone [repository-url]
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database
```bash
php artisan migrate
```

5. Start the development server
```bash
php artisan serve
```

## Configuration

1. Update database credentials in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```



## Usage
```
```
1. **Content Management**:
   - Add/update projects through the database
   - Modify experience timeline entries
   - Update skills and languages

2. **Customization**:
   - Modify blade templates in `resources/views/`
   - Update styles in `public/css/style.css`
   - Configure routes in `routes/web.php`

## Responsive Design

The website is optimized for:
- Desktop (1200px and above)
- Tablet (768px to 1199px)
- Mobile (below 768px)

## Key Components

1. **Navbar**: Responsive navigation with mobile hamburger menu
2. **Hero Section**: Professional introduction with CTA buttons
3. **Projects**: Card-based layout with project details and live links
4. **Experience**: Timeline layout showing professional history
5. **Contact Form**: Interactive form with validation



## Usage

### Content Management
1. Add/update projects through the database
2. Modify experience timeline entries
3. Update skills and languages
4. Manage educational background
5. Configure social media links

### Customization
- Modify blade templates in `resources/views/`
- Update styles in `public/css/style.css`
- Configure routes in `routes/web.php`

## Responsive Design

The website is optimized for:
- Desktop (1200px and above)
- Tablet (768px to 1199px)
- Mobile (below 768px)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the MIT license.

## Contact

Your Name - [shuvoj360@gmail.com](mailto:shuvoj360@gmail.com)

[//]: # (Project Link: [https://github.com/yourusername/portfolio]&#40;https://github.com/yourusername/portfolio&#41;)


