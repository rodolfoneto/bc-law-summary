<?php

namespace App\Http\Controllers;

use Gemini;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

class SummaryController extends Controller
{
    #[Route(uri: '/summary/{id}', methods: ['GET'])]
    public function index(Request $request, string $id)
    {
        $url = 'http://www.bclaws.gov.bc.ca/civix/document/id/complete/statreg/' . $id;
        $apiKey = config(key: 'app.gemini_api_key');

        $client = new Client();
        try {
            $data = $client->request(
                method: 'GET',
                uri: $url,
                options: [
                    'connect_timeout' => 3.14,
                    'debug' => false,
                    'headers' => [
                        'Accept' => 'text/xml',
                        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
                    ],
                ],
            );
            $xmlData = (string) $data->getBody();
            $document = strip_tags(string: $xmlData);

            $client = Gemini::client(apiKey: $apiKey);
            $result = $client->geminiPro()->generateContent('Give me a short summary of this text in one paragraph: ' . $document);
            return response()->json(['data' => $result->text()]);
        } catch (Throwable $e) {
            dd($e->getMessage());
        }
    }
}
