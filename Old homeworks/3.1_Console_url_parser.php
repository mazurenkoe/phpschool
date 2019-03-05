<?php
// php 3.1_Console_url_parser.php -u 'https://www.google.com.ua/search/test/tadadaaam/?client=ubuntu&channel=fs&q=long+url&ie=utf-8&oe=utf-8#testehash.pdf'

$urlInput = getopt("u:");
$url = $urlInput["u"];
$parsedUrl = parse_url($url);
$parsedHost = explode('.', $parsedUrl['host']);
$domain = substr((str_replace($parsedHost[0], '', $parsedUrl['host'])), 1);
$topLevDomain = substr((str_replace($parsedHost[1], '', $domain)), 1);

$array = [
    'scheme' => $parsedUrl['scheme'],
    'host' => $parsedUrl['host'],
    'subdomain' => $parsedHost[0],
    'domain' => $domain,
    'top level domain' => $topLevDomain,
    'resource' => $parsedUrl['path'],
    'extension' => getExtension($url),
    'query' => $parsedUrl['query'],
    'hash' => $parsedUrl['fragment'],
];

$arrayNotEmpty = array_filter($array);
print_r($arrayNotEmpty);

function getExtension($filename): string
{
    $path_info = pathinfo($filename);

    return $path_info['extension'];
}
