<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Data Member';

        $members = [
            'Zahwa',
            'Fajar',
            'Hany',
            'Keysa',
            'Dewi',
        ];

        return view('members.index', compact('title', 'members'));
    }
}