<?php
namespace App\Http\Controllers;

class TemplateController extends Controller
{
    public function index()
    {
        return view('template');
    }

    public function getThemeTemplates($theme)
    {
        if (in_array($theme, ['earth', 'neon', 'pastel'])) {
            return view("components.templates.{$theme}");
        }
        return abort(404);
    }
}