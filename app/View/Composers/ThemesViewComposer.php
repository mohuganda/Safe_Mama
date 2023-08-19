<?php
namespace App\View\Composers;

use App\Models\PublicationType;
use App\Models\SubThemeticArea;
use App\Models\ThemeticArea;
use Illuminate\View\View;

class ThemesViewComposer{

    public function compose(View $view){

        $subthemes = ThemeticArea::with('subthemes')->get();
        $view->with('themes',$subthemes);
    }

}

?>