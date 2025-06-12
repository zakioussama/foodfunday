<?php
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuItems = [
            'starters' => [
                ['name' => 'GARLIC BREAD', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 8.5, 'image' => 'menu-item-thumbnail-01.jpg'],
                // more starter items here
            ],
            // other categories like main_dishes, desserts, drinks
        ];

        return view('home', compact('menuItems'));
    }
}
