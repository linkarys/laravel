<?php

class AppHelper {

    public static function get_color($id)
    {
    	$colors = array('social', 'industrial', 'vine', 'lava', 'gray', 'sky');
    	$index = $id % sizeof($colors);

    	return $colors[$index];

    }

        public static function get_video_head($user)
    {
    	return $user == '?' ? 'Gruden 销魂酒名人录' : $user;
    }
}