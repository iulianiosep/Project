<?php 
class SearchController extends AppController {
    function suggestData() {
        header('Expires: '.date('r', strtotime('+1 day')));
        header('Content-type: application/json; charset=utf-8');
        // The top 5000 search words as an array()
        $this->set('data', $this->Search->top5kSearches());
    }
}


?>