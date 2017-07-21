<?php
	include_once(dirname(dirname(__FILE__)).'/helpers/common.php');

	$action = $_POST['action'];

	$success = false;
	$message = "Access denied!";

	switch ($action) {
		case 'paste_video':
				$share_video = $_POST['share_video'];
				$video_id = getYoutubeVideoID($share_video);

				if ($video_id) {
					$key = "AIzaSyCO5lIc_Jlrey0aroqf1cHXVF1MUXLNuR0";
					$dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=".$video_id."&key=".$key);
					$data = json_decode($dur, true);
					$title = $data['items'][0]['snippet']['title'];
					$desc = $data['items'][0]['snippet']['description'];

					$link = getYoutubeEmbedUrl($share_video);

					$message = array(
										'link' => $link,
										'title' => $title,
										'description' => substr($desc ,0 , 100),
									);

					$success = true;
				} else {
					$message = "";
				}
			break;

		default:
			break;
	}

	$response = array(
						"success" => $success,
						"message" => $message,
					);

	exit(json_encode($response));
?>