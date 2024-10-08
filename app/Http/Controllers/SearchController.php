<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    #[Route(uri: '/', methods: ['GET'])]
    public function index(Request $request): JsonResponse
    {
        $q = $request->input(key: 'q');
        $s = $request->input(key: 's', default: 0);
        $e = $request->input(key: 'e', default: 20);
        $nFrag = $request->input(key: 'nFrag', default: 5);
        $lFrag = $request->input(key: 'lFrag', default: 100);

        if(is_null(value: $q)) {
            return response()->json(data: [
                'error' => 'Query parameter "q" is required.',
            ])->setStatusCode(code: 400);
        }

        $response = Http::get(url: 'http://www.bclaws.ca/civix/search/complete/fullsearch', query: [
            'q' => $q,
            's' => $s,
            'e' => $e,
            'nFrag' => $nFrag,
            'lFrag' => $lFrag,
        ]);

        $xml = simplexml_load_string(data: $response->getBody(), class_name: SimpleXMLElement::class);
        return response()->json(data: $xml)->setStatusCode(code: $response->status());
    }
}
