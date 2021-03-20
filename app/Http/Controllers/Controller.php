<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function select() {
        $num = isset($_GET['num']) ? $_GET['num'] : 1;
        $font = "Blood Thirst";

        switch ($num) {
            case 1: $font = "Blood Thirst"; break;
            case 2: $font = "Dark Tales"; break;
            case 3: $font = "Happy Ending"; break;
            case 4: $font = "October Crow"; break;
            case 5: $font = "Stranger back in the Night"; break;
            case 6: $font = "STRANGER CREATURE"; break;
            case 7: $font = "Black Dahlia"; break;
            case 8: $font = "Beautiful Horror"; break;
            case 9: $font = "Anarchy"; break;
            case 10: $font = "Amped For Evil"; break;
            default: $font = "Helvetica"; break;
        }

        return view('welcome', [
            'num' => $num,
            'font' => $font
        ]);
    }
}
