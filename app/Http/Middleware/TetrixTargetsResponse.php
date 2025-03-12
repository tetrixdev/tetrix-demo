<?php

namespace App\Http\Middleware;

use Closure;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TetrixTargetsResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only process if the TX-Targets header is present
        $txTargets = $request->header('TX-Targets');
        if (!$txTargets) {
            return $response;
        }

        // Ensure response is HTML
        $contentType = $response->headers->get('Content-Type', '');
        if (!str_contains($contentType, 'text/html')) {
            trigger_error('TX-Targets header present but response is not HTML', E_USER_WARNING);
        }

        $htmlContent = preg_replace('/<!DOCTYPE html>/i', '', $response->getContent());
        $DOMDocument = new DomDocument('1.0', 'UTF-8');
        $DOMDocument->loadHTML($htmlContent);
        $xpath = new DOMXpath($DOMDocument);

        // example 1: for everything with an id
        $elements = $xpath->query("//*[@id='button4']");
        dd($elements);

//        $crawler = new Crawler($htmlContent);
//
//        $selectedContent = [];
//
//        // Parse and retrieve elements based on the TX-Targets selectors
//        $selectors = explode(',', $txTargets);
//        foreach ($selectors as $selector) {
//            $selector = trim($selector);
//            $crawler->filter($selector)->each(function ($node) use (&$selectedContent) {
//                $node->getNode(0)->setAttribute('hx-swap-oob', 'true');
//                $selectedContent[] = $node->outerHtml();
//            });
//        }
//
//        // If no elements found, return original response
//        if (empty($selectedContent)) {
//            return $response;
//        }
//
//        // Return only selected elements with hx-swap-oob="true"
//        $newResponse = implode("\n", $selectedContent);
//
//        return response($newResponse, 200)
//            ->header('Content-Type', 'text/html');
    }
}
