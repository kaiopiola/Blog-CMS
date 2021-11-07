<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function generate()
    {
        # Gerador automático de Sitemaps em formato XML
        # Por favor, não alterar este controlador e nem sua respectiva view.
        # Para adicionar as páginas, utilize a SitePagesController
        $static_pages =
            [
                'home'
            ];

        foreach ($static_pages as $sp) {
            $pages[] = [
                'url' => route($sp),
                'last_modified' => now(),
                'priority' => 1.0
            ];
        }

        $posts = Posts::where("is_public", true)->get(); // Necessário puxar os itens criados dentro dos últimos 2 dias apenas

        foreach ($pages as $page) : $data[] = (object) $page;
        endforeach;
        return response()->view('base.sitemap', [
            'data' => (object) $data,
            'posts' => (object) $posts
        ])->header('Content-Type', 'text/xml');
    }
}
