<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Backpack\MenuCRUD\app\Models\MenuItem;
use App\Models\PageSetting;
use App\Models\Advisior;

class PagesController extends Controller
{
    protected $menu;

    function __construct()
    {
        $this->menu = MenuItem::getTree();
    }

    function home()
    {
      $pageSetting = PageSetting::findBySlug('/');

      if (empty($pageSetting)) {
        abort(500);
      }

      return view($pageSetting->view, [
        'page' => $pageSetting,
        'menu' => $this->menu
      ]);
    }

    function show($slug)
    {
      $pageSetting = PageSetting::findBySlug($slug);

      if (empty($pageSetting)) {
        abort(500);
      }

      return view($pageSetting->view, [
        'page' => $pageSetting,
        'menu' => $this->menu
      ]);
    }
}
