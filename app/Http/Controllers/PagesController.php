<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function Inicio() {
        $slider = [
            [
                'title' => 'Slide me to the moon 1',
                'subtitle' => 'With awesome animations 1', 
                'img' => 'https://livedemo00.template-help.com/wt_prod-23198/images/swiper-slide-1.jpg'
            ],[
                'title' => 'Slide me to the moon 2 ',
                'subtitle' => 'With awesome animations 2',
                'img' => 'https://livedemo00.template-help.com/wt_prod-23198/images/swiper-slide-2.jpg'
            ]
        ];

        $cardPrograms = [
            [
                'icon'=> '',
                'title' => 'Accounting',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting2',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting3',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accountin4',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting5',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting6',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting7',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ],[
                'icon'=> '',
                'title' => 'Accounting8',
                'text' => 'Master the skills of finance & accounting at Chester College.'
            ]
        ];

        return view('home', compact('slider', 'cardPrograms'));
    }
}
