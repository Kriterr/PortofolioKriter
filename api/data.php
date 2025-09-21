<?php
// Portfolio Data Configuration
$portfolio = [
    'personal' => [
        'name' => 'John Doe',
        'title' => 'Full Stack Developer',
        'subtitle' => 'Crafting digital experiences with modern web technologies',
        'bio' => 'Passionate developer with 5+ years of experience creating beautiful, functional web applications. I specialize in modern JavaScript frameworks, PHP, and database design.',
        'location' => 'San Francisco, CA',
        'email' => 'john@example.com',
        'phone' => '+1 (555) 123-4567',
        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face'
    ],
    
    'skills' => [
        [
            'name' => 'Frontend Development',
            'items' => ['React', 'Vue.js', 'JavaScript', 'TypeScript', 'HTML5', 'CSS3', 'Tailwind CSS'],
            'level' => 90
        ],
        [
            'name' => 'Backend Development', 
            'items' => ['PHP', 'Node.js', 'Python', 'MySQL', 'PostgreSQL', 'API Design'],
            'level' => 85
        ],
        [
            'name' => 'Tools & DevOps',
            'items' => ['Git', 'Docker', 'AWS', 'CI/CD', 'Webpack', 'Linux'],
            'level' => 80
        ],
        [
            'name' => 'Design & UX',
            'items' => ['Figma', 'Adobe XD', 'Photoshop', 'UI/UX Design', 'Responsive Design'],
            'level' => 75
        ]
    ],
    
    'projects' => [
        [
            'title' => 'E-Commerce Platform',
            'description' => 'Full-stack e-commerce solution built with React and PHP, featuring payment integration, inventory management, and admin dashboard.',
            'technologies' => ['React', 'PHP', 'MySQL', 'Stripe API', 'Docker'],
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=250&fit=crop',
            'github' => 'https://github.com/johndoe/ecommerce',
            'live' => 'https://ecommerce-demo.com',
            'featured' => true
        ],
        [
            'title' => 'Task Management App',
            'description' => 'Collaborative task management application with real-time updates, drag-and-drop functionality, and team collaboration features.',
            'technologies' => ['Vue.js', 'Node.js', 'Socket.io', 'MongoDB'],
            'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=400&h=250&fit=crop',
            'github' => 'https://github.com/johndoe/taskapp',
            'live' => 'https://taskapp-demo.com',
            'featured' => true
        ],
        [
            'title' => 'Weather Dashboard',
            'description' => 'Modern weather application with location-based forecasts, interactive maps, and beautiful data visualizations.',
            'technologies' => ['JavaScript', 'Chart.js', 'Weather API', 'CSS3'],
            'image' => 'https://images.unsplash.com/photo-1504608524841-42fe6f032b4b?w=400&h=250&fit=crop',
            'github' => 'https://github.com/johndoe/weather',
            'live' => 'https://weather-demo.com',
            'featured' => false
        ],
        [
            'title' => 'Blog CMS',
            'description' => 'Custom content management system for blogging with markdown support, SEO optimization, and responsive design.',
            'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
            'image' => 'https://images.unsplash.com/photo-1486312338219-ce68e2c6b7d6?w=400&h=250&fit=crop',
            'github' => 'https://github.com/johndoe/blogcms',
            'live' => 'https://blog-demo.com',
            'featured' => false
        ]
    ],
    
    'experience' => [
        [
            'position' => 'Senior Full Stack Developer',
            'company' => 'TechCorp Solutions',
            'period' => '2022 - Present',
            'description' => 'Lead development of enterprise web applications, mentor junior developers, and architect scalable solutions for clients.'
        ],
        [
            'position' => 'Frontend Developer',
            'company' => 'Digital Agency Pro',
            'period' => '2020 - 2022',
            'description' => 'Developed responsive websites and web applications for various clients using modern JavaScript frameworks and tools.'
        ],
        [
            'position' => 'Web Developer',
            'company' => 'StartupXYZ',
            'period' => '2019 - 2020',
            'description' => 'Built and maintained company website, implemented new features, and optimized performance for better user experience.'
        ]
    ],
    
    'social' => [
        ['name' => 'GitHub', 'url' => 'https://github.com/johndoe', 'icon' => 'fab fa-github'],
        ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/johndoe', 'icon' => 'fab fa-linkedin'],
        ['name' => 'Twitter', 'url' => 'https://twitter.com/johndoe', 'icon' => 'fab fa-twitter'],
        ['name' => 'Instagram', 'url' => 'https://instagram.com/johndoe', 'icon' => 'fab fa-instagram']
    ]
];

// Helper function to get portfolio data
function getPortfolioData() {
    global $portfolio;
    return $portfolio;
}

// Helper function to get specific section
function getSection($section) {
    global $portfolio;
    return isset($portfolio[$section]) ? $portfolio[$section] : [];
}
?>