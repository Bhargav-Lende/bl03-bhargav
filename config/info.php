<?php

return [
    'sitename' => 'Bhargav Lende',
    'navlinks' => [
        [
            'id' => 'home',
            'name' => 'Home',
            'url' => '/',
            'image' => 'images/home.jpeg',
        ],
        [
            'id' => 'about',
            'name' => 'About',
            'url' => '/portfolio/about',
            'image' => 'images/college.jpeg',
        ],
        [
            'id' => 'contact',
            'name' => 'Contact',
            'url' => '/portfolio/contact',
            'image' => 'images/technology.jpeg',
        ],
        [
            'id' => 'projects',
            'name' => 'Projects',
            'url' => '/portfolio/projects',
            'image' => 'images/events.jpeg',
        ],
    ],
    'pagelinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
        ],
        [
            'name' => 'Experience',
            'url' => '/contact',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/portfolio/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Twitter',
            'name' => 'icons.twitter',
            'url' => 'https://x.com/Bhargav__15?t=lThBkBC6g3qff4dvnh0IPA&s=09',
        ],
        [
            'title' => 'Facebook',
            'name' => 'icons.facebook',
            'url' => 'https://www.linkedin.com/in/bhargav-lende-4b0232325/',
        ],
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/bhargav__15n?igsh=MWhnOWFoeGVrN3F4Yg==',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/bhargav-lende-4b0232325/',
        ],
    ],
    'taglist' => [
        [
            'id' => 'trends',
            'name' => 'Trends',
        ],
        [
            'id' => 'tips',
            'name' => 'Tips',
        ],
        [
            'id' => 'ideas',
            'name' => 'Ideas',
        ],
        [
            'id' => 'security',
            'name' => 'Security',
        ],
        [
            'id' => 'gaming',
            'name' => 'Gaming',
        ],
        [
            'id' => 'climate',
            'name' => 'Climate',
        ],
        [
            'id' => 'gear',
            'name' => 'Gear',
        ],
        [
            'id' => 'reviews',
            'name' => 'Reviews',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'blog',
            'path' => '/blog/{articleId?}',
            'view' => 'blog',
        ],
        [
            'name' => 'portfolio',
            'path' => '/portfolio/{category?}',
            'view' => 'projects',
        ],
        [
            'name' => 'tag',
            'path' => '/tag',
            'view' => 'tag',
        ],
    ],
    'articles' => [
        [
            'id' => '1',
            'title' => 'Ramdeobaba University',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '2',
            'title' => 'Ramdeobaba University2',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '3',
            'title' => 'Ramdeobaba University3',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '4',
            'title' => 'Ramdeobaba University4',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '5',
            'title' => 'Ramdeobaba University5',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '6',
            'title' => 'Ramdeobaba University6',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
    ],
];
