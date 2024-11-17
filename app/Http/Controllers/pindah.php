<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pindah extends Controller
{
    public function pindahnav() {
        $about = '#about';
        $home = '#home';
        $skill = '#skills';
        $contact = '#contact';
        $project = '#project';
        $linkedin = 'https://www.linkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit';
        $github = 'https://github.com/FranklinJaya2006?tab=repositories';
        $instagram = 'https://www.instagram.com/franklinjaya_/followers/mutualOnly';
        return view('home', compact('about', 'home', 'skill', 'contact', 'project', 'linkedin', 'github', 'instagram'));
    }
}
