<?php

class Post_model extends CI_Model {

    function registerPost(){
        $can_id = $this->input->post('channel_name');
        $sub_id = $this->input->post('sub_channel_name');
        $data = array(
               
                'post_link' => $this->input->post('post_link'),
                /*'post_like_cnt' => $this->input->post('post_like_cnt'),
                'post_comment_cnt' => $this->input->post('post_comment_cnt'),*/
                'post_cat_id' => $this->input->post('post_cat_id'),
                'post_admincomment' => $this->input->post('post_admincomment'),
                'post_othercomment' => $this->input->post('post_othercomment'),
                'post_date' => date('Y-m-d'),
                'post_datetime' => date('Y-m-d:H-m-s'),
                'channel_id' => $this->input->post('channel_name'),
                'sub_channel_id' => $this->input->post('sub_channel_name'),
                'creator_id' => $this->session->userdata('userid'),
                'platform_id' => $can_id*3 + $sub_id - 3,
            );
        $query = $this->db->
            where('post_link' , $this->input->post('post_link'))
            ->get('posts');
        if($query->num_rows() > 0) {
            return -1;
        } else {
            $this->db->insert('posts',$data);  
            return 1;
        }
    }
    function updatePost($post_id) {
        
        $data = array(
               
                'post_link' => $this->input->post('post_link'),
                /*'post_like_cnt' => $this->input->post('post_like_cnt'),
                'post_comment_cnt' => $this->input->post('post_comment_cnt'),
                */'post_cat_id' => $this->input->post('post_cat_id'),
                'post_admincomment' => $this->input->post('post_admincomment'),
                'post_othercomment' => $this->input->post('post_othercomment'),
            );
        $this->db->where('post_id', $post_id);
        $this->db->update('posts', $data); 
        return 1;
    }
    function deletePost($post_id) {
        
        $this->db
                ->where('post_id',$post_id)
                ->delete('posts'); 
            
        if($this->db->affected_rows()){
            return 1;
        } else {
            return -1;
        }
         
    }
    function getTopPosts() {
        $q = $this->db
                    ->select("*")
                    ->from("posts")
                    ->join('users', 'users.user_id = posts.creator_id', 'left')
                    ->order_by('post_like_cnt','desc')
                    ->limit('5')
                    ->get()
                    ->result();
        return $q;
    }
    function getAllPosts($sel_date) {
        $q = $this->db
                    ->select("*")
                    ->from("posts")
                    ->where('post_date',$sel_date)  
                    ->join('users', 'users.user_id = posts.creator_id', 'left')
                    ->order_by('platform_id','asc')
                    ->get()
                    ->result();
        return $q;
    }
    function getPostById($id){
        $q = $this->db
                    ->where('post_id',$id)
                    ->get('posts')                    
                    ->row();
        return $q;
    }
    function scrape_insta_info( $url ) {
        $like_cnt = 0;
        $comment_cnt = 0;
        if($url){
            $insta_source = @file_get_contents( $url );
            if($insta_source){
                $shards = explode( 'window._sharedData = ', $insta_source );
                $insta_json = explode( ';</script>', $shards[ 1 ] );
                $insta_array = json_decode( $insta_json[ 0 ], TRUE );
                if($insta_array[ 'entry_data' ][ 'PostPage' ][ 0 ][ 'graphql' ][ 'shortcode_media' ]){
                    $comment_cnt = $insta_array[ 'entry_data' ][ 'PostPage' ][ 0 ][ 'graphql' ][ 'shortcode_media' ]['edge_media_to_comment']['count'];
                    $like_cnt = $insta_array[ 'entry_data' ][ 'PostPage' ][ 0 ][ 'graphql' ][ 'shortcode_media' ]['edge_media_preview_like']['count'];
                }  
            }
        }
        
        $arr = array("like" => $like_cnt,"comment"=>$comment_cnt);
        return $arr; // this return a lot things print it and see what else you need
    }
    function scrape_face_info( $url ) {
        $like_cnt = 0;
        $comment_cnt = 0;
        if($url){
            //https://stackoverflow.com/questions/45355954/php-get-post-data-from-facebook-page-using-only-facebook-graph
            //error_reporting(0);
            /*xxxxclient_idxxx='your clientid'*/
            /*xxxxxxclient_secretxxxx='your client_secret'*/
            //Replace "YOUR-PAGE-NAME" with your page name.
           /* $access_str = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=xxxxclient_idxxx&client_secret=xxxxxxclient_secretxxxx&grant_type=client_credentials');
            $tokenarr = str_replace('"','',$access_str);
            $tokenarray = explode(":",str_replace(',',':', $tokenarr));
            var_dump($tokenarray);  //Request the public posts. 
            $json_str = file_get_contents('https://graph.facebook.com/'.$pagename.'/feed??fields=attachments&fields=attachments&access_token='.$tokenarray[1]);*/

            //decode json string into array

            /*$data = json_decode($json_str);

            foreach ($data as $posts) {
                foreach($posts as $post){
                $postit = (array) json_decode(json_encode($post), True);
                foreach ($postit as $getit) {
                echo '<p>' .$getit['data'][0]['description'].'</p>';
                echo '<img src="'.$getit['data'][0]['media']['image']['src'].'" />';
                echo "</br>-----------</br>";
                    }

                }
            }*/
        }
        
        $arr = array("like" => $like_cnt,"comment"=>$comment_cnt);
        return $arr; // this return a lot things print it and see what else you need
    }
    function scrape_twitter_info( $url ) {
        $like_cnt = 0;
        $comment_cnt = 0;
        if($url){
            /*$TweetPHP = new TweetPHP(array(
              'consumer_key'        => 'xxxxxxxxxxxxxxxxxxxxx',
              'consumer_secret'     => 'xxxxxxxxxxxxxxxxxxxxx',
              'access_token'        => 'xxxxxxxxxxxxxxxxxxxxx',
              'access_token_secret' => 'xxxxxxxxxxxxxxxxxxxxx',
              'api_params'          => array('screen_name' => 'twitteruser')
            ));*/
        }
        
        $arr = array("like" => $like_cnt,"comment"=>$comment_cnt);
        return $arr; // this return a lot things print it and see what else you need
    }
    function setCountInfo(){
        //instagram
        $posts = $this->db
                    ->select("*")
                    ->from("posts")
                    ->where('channel_id',1)  
                    ->get()
                    ->result();
        for($i=0; $i< count($posts); $i++){
            $item = $posts[$i];
            $arr = $this->scrape_insta_info( $item->post_link );
            $data = array(
                'post_like_cnt' => $arr['like'],
                'post_comment_cnt' => $arr['comment'],
            );
            $this->db->where('post_id', $item->post_id);
            $this->db->update('posts', $data); 
        }
        //facebook
        $posts = $this->db
                    ->select("*")
                    ->from("posts")
                    ->where('channel_id',2)  
                    ->get()
                    ->result();
        for($i=0; $i< count($posts); $i++){
            $item = $posts[$i];
            $arr = $this->scrape_face_info( $item->post_link );
            $data = array(
                'post_like_cnt' => $arr['like'],
                'post_comment_cnt' => $arr['comment'],
            );
            $this->db->where('post_id', $item->post_id);
            $this->db->update('posts', $data); 
        }   
        //twitter
        $posts = $this->db
                    ->select("*")
                    ->from("posts")
                    ->where('channel_id',3)  
                    ->get()
                    ->result();
        for($i=0; $i< count($posts); $i++){
            $item = $posts[$i];
            $arr = $this->scrape_twitter_info( $item->post_link );
            $data = array(
                'post_like_cnt' => $arr['like'],
                'post_comment_cnt' => $arr['comment'],
            );
            $this->db->where('post_id', $item->post_id);
            $this->db->update('posts', $data); 
        }         
    }
   
    
}
?>