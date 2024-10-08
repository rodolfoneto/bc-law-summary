<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Routing\Annotation\Route;

class DocumentController extends Controller
{
    #[Route(uri: '/document/{id}', methods: ['GET'])]
    public function index(Request $request, $id)
    {
        $response = Http::get(url: 'http://www.bclaws.ca/civix/document/id/complete/statreg/' . $id);
        return response(content: $response->getBody(), status: $response->status());
    }
}
