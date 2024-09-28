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
            'image' => 'images/train.png',
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
            'url' => '/portfolio/about',
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
            'url' => '/portfolio/about',
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
            'name' => 'contact',
            'path' => '/portfolio/contact',
            'view' => 'contact',
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
            'title' => 'Introduction',
            'image' => 'images/train.png',
            'description' => 'Myself Bhargav Jayant Lende , a tech driven Engineering student , pursuing my bachleors degree in computer science and engineering with specialization in data science . I look upon to work in a dynamic and collaborative environment .',
            'category' => 'Objective',
            'duration' => '3 mins',
            'date' => 'Aug 28, 2024',
        ],
        [
            'id' => '2',
            'title' => 'Education',
            'image' => 'images/edu.png',
            'description' => 'Ramdeobaba College of Engineering and Management (2023 - 2027)',
            'category' => 'Deatils',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '3',
            'title' => 'Skills',
            'image' => 'images/skill.png',
            'description' => 'C | Java | Python | Web development | Photography | Videography | Content Writing',
            'category' => 'Interest',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '4',
            'title' => 'Achievements',
            'image' => 'images/award.png',
            'description' => 'Silver medal in English & Geography olympiad (2018)  |  National Taekwondo player (2016)  |  Academic Excellence Award (2019 , 2021)  |  Elected volunteer of School Committee
       (2014 , 2015 , 2018 , 2019 , 2020)',
            'category' => 'Awards',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        
    ],
];
