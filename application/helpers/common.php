<?php
	function getYoutubeEmbedUrl($url) {
	    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    if (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    return 'https://www.youtube.com/embed/'.$youtube_id ;
	}

	function getYoutubeVideoID($url) {
	    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    if (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    return $youtube_id ;
	}
?>