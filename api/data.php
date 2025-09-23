<?php

// FILE: data.php
// Cukup ubah data di bawah ini untuk memperbarui website Anda.

$data = [
    // Informasi Pribadi & Header
    'personal' => [
        'name' => 'Nama Anda',
        'tagline' => 'Product Designer & Front-end Developer',
        'email' => 'emailanda@example.com',
        'linkedin' => 'https://linkedin.com/in/usernameanda', // Ganti dengan URL LinkedIn Anda
        'github' => 'https://github.com/usernameanda',     // Ganti dengan URL GitHub Anda
    ],

    // Teks di bagian "Tentang Saya"
    'about' => [
        'title' => 'Thinking differently.',
        'description' => 'Saya adalah seorang desainer dan developer dengan fokus pada penciptaan pengalaman pengguna yang intuitif, elegan, dan bermakna. Saya percaya pada kekuatan desain minimalis untuk menyelesaikan masalah kompleks. Saya terobsesi dengan detail kecil dan performa yang mulus.',
    ],

    // Daftar Proyek Portofolio Anda
    'projects' => [
        [
            'title' => 'Project Alpha',
            'category' => 'UI/UX Design & Development',
            'description' => 'Mendesain ulang aplikasi mobile banking untuk meningkatkan retensi pengguna sebesar 20%.',
            'image_url' => 'https://images.unsplash.com/photo-1559028006-44d08f33588f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80', // Ganti dengan URL gambar Anda
            'link' => '#' // Ganti dengan link ke proyek Anda
        ],
        [
            'title' => 'Project Beta',
            'category' => 'Web Application',
            'description' => 'Membangun dashboard analitik interaktif menggunakan React dan D3.js.',
            'image_url' => 'https://images.unsplash.com/photo-1587440871875-191322ee64b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80', // Ganti dengan URL gambar Anda
            'link' => '#' // Ganti dengan link ke proyek Anda
        ],
        [
            'title' => 'Project Gamma',
            'category' => 'Branding & Identity',
            'description' => 'Menciptakan identitas visual yang kohesif untuk startup teknologi yang berfokus pada AI.',
            'image_url' => 'https://images.unsplash.com/photo-1629904853716-f0bc642191e4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', // Ganti dengan URL gambar Anda
            'link' => '#' // Ganti dengan link ke proyek Anda
        ],
    ],
];

// Fungsi helper untuk keamanan (mencegah XSS)
// Selalu gunakan ini saat mencetak data ke HTML
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}