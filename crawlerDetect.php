<?php
function isCrawler() {
  $crawler = $_SERVER['HTTP_USER_AGENT'];
    // Bots list 
    $bot_list = array(
      'Google',
      'msnbot',
      'Rambler',
      'Yahoo',
      'AbachoBOT',
      'accoona',
      'AcioRobot',
      'ASPSeek',
      'CocoCrawler',
      'Dumbot',
      'FAST-WebCrawler',
      'GeonaBot',
      'Gigabot',
      'Lycos',
      'MSRBOT',
      'Scooter',
      'AltaVista',
      'IDBot',
      'eStyle',
      'Scrubby',
      'bot',
      'crawl',
      'slurp',
      'spider',
      'mediapartners',
      'curl',
      'facebook',
      'fetch',
      'Googlebot',
      'Baiduspider',
      'ia_archiver',
      'R6_FeedFetcher',
      'NetcraftSurveyAgent',
      'bingbot',
      'facebookexternalhit',
      'PrintfulBot',
      'Twitterbot',
      'UnwindFetchor',
      'urlresolver',
    );
      
    // If it is search engine bot
    // returns true, else returns false
    foreach($bot_list as $bl) {
        if( stripos( $crawler, $bl ) !== false ) return true;
    }
      
    return false;
}
 
?>