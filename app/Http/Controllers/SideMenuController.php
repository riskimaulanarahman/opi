<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\SideMenu;
use App\Models\Sequence;
use Illuminate\Http\Request;

class SideMenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index($route)
    {
        $menu = array();
        $sidemenu = SideMenu::select(['title', 'icon_id', 'sequence_id', 'parent_id', 'is_active'])->where('route', $route)->first();
        $sequence = Sequence::select(['title', 'is_active'])->where('id', $sidemenu->sequence_id)->first();
        $icon = Icon::select('name')->where('id', $sidemenu->icon_id)->first();
        // Check active menu or sequence
        if($sequence->is_active || $sidemenu->is_active) {
            $menu = array(
                'icon' => $icon->name,
                'module' => $sequence->title,
                'title' => $sidemenu->title,
                'menu' => array(),
                'data' => null
            );
        }
        // secondary menu queries
        $secondary_menu = Sidemenu::select(['id', 'icon_id', 'title', 'route'])->whereRaw('parent_id like ? and is_secondary_menu like 1', [$sidemenu->parent_id])->get();
        // check secondary menu have value
        if (count($secondary_menu) > 0) {
            // Get secondary menu
            foreach ($secondary_menu as $key => $item_menu) {
                $icon_menu = Icon::select('name')->where('id', $item_menu->icon_id)->first();
                
                // push array in to menu
                array_push($menu['menu'], array(
                    'icon' => $icon_menu->name,
                    'title' => $item_menu->title,
                    'route' => $item_menu->route,
                    'submenu' => array()
                ));
                
                // submenus queries
                $submenu = Sidemenu::select(['id', 'icon_id','title', 'route'])->whereRaw('parent_id like ? and is_secondary_menu like 1', [$item_menu->id])->get();
                // check have submenu item
                if(count($submenu) > 0) {
                    // get submenu
                    foreach ($submenu as $item_submenu) {
                        $icon_submenu = Icon::select('name')->where('id', $item_submenu->icon_id)->first();
                        // push array into sub menu
                        array_push(
                            $menu['menu'][$key]['submenu'],
                            array(
                                'icon' => $icon_submenu->name,
                                'title' => $item_submenu->title,
                                'route' => $item_submenu->route
                            )
                        );
                    }
                } else {
                    $menu['menu'][$key]['submenu'] = null;
                }
            }
        };

        $data = array(
            'icon' => $icon->name,
            'module' => $sequence->title,
            'title' => $sidemenu->title,
            'menu' => [
                array(
                    'title' => 'Menus',
                    'routes' => 'root',
                    'submenu' => [
                        array(
                            'title' => 'subMenus',
                            'routes' => 'root',
                        ),
                        array(
                            'title' => 'subMenus 1',
                            'routes' => 'root',
                        )
                    ]
                ),
                array(
                    'title' => 'Menus 1',
                    'routes' => 'root',
                    'submenu' => null
                )
            ],
            'data' => null
        );

        return view('grid.index')->with('data', $menu);
    }
}
