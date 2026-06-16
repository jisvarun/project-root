<?php

namespace App\Controllers;

class Home extends BaseController
{
    private array $pages = [
        'about' => [
            'view' => 'about',
            'title' => 'About | Riverview College',
            'active' => 'about',
        ],
        'courses' => [
            'view' => 'courses',
            'title' => 'Courses | Riverview College',
            'active' => 'courses',
        ],
        'syllabus' => [
            'view' => 'syllabus',
            'title' => 'Syllabus | Riverview College',
            'active' => 'syllabus',
        ],
        'contact' => [
            'view' => 'contact',
            'title' => 'Contact | Riverview College',
            'active' => 'contact',
        ],
    ];

    public function index(): string
    {
        return view('index', [
            'title' => 'Riverview College | Excellence in Education',
            'active' => 'home',
        ]);
    }

    public function page(string $page): string
    {
        if (! array_key_exists($page, $this->pages)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = $this->pages[$page];

        return view($data['view'], [
            'title' => $data['title'],
            'active' => $data['active'],
        ]);
    }
}
