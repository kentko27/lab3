<?php

namespace App\Controllers;

<<<<<<< HEAD
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{
    // ...
=======
class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
>>>>>>> 60dee806162f446c3184508a03e1d1570ea68706

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}