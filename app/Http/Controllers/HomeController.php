<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
            $menuItems = [
            'STARTERS' => [
                ['name' => 'Bruschetta', 'description' => 'Grilled bread topped with marinated tomatoes and basil.', 'price' => 6.50, 'image' => 'starter1.jpg'],
                ['name' => 'Stuffed Mushrooms', 'description' => 'Button mushrooms filled with cheese and herbs.', 'price' => 7.00, 'image' => 'starter2.jpg'],
            ],
            'MAIN DISHES' => [
                ['name' => 'Grilled Chicken', 'description' => 'Tender chicken breast with garlic butter and veggies.', 'price' => 14.99, 'image' => 'main1.jpg'],
                ['name' => 'Spaghetti Bolognese', 'description' => 'Classic Italian pasta with rich meat sauce.', 'price' => 12.99, 'image' => 'main2.jpg'],
            ],
            'DESSERTS' => [
                ['name' => 'Chocolate Lava Cake', 'description' => 'Warm chocolate cake with a molten center.', 'price' => 6.00, 'image' => 'dessert1.jpg'],
                ['name' => 'Cheesecake', 'description' => 'Creamy cheesecake with a buttery crust.', 'price' => 5.50, 'image' => 'dessert2.jpg'],
            ],
            'DRINKS' => [
                ['name' => 'Mojito', 'description' => 'Refreshing lime and mint cocktail.', 'price' => 4.50, 'image' => 'drink1.jpg'],
                ['name' => 'Iced Latte', 'description' => 'Chilled espresso with creamy milk.', 'price' => 3.99, 'image' => 'drink2.jpg'],
            ],
        ];


        return view('home', compact('menuItems'));
    }
}
