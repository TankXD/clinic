<?php 

    // 테마 설정
    function my_setup(){
        add_theme_support('post-thumbnails');
        // サムネイルを投稿に追加できるようになります
        add_theme_support('automatic-feed-links');
        // rss フィードを自動追加
        add_theme_support('title-tag');
        // タイトルと説明はWordPressで自動生成されます
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
        // html5を使用して、テーマでHTML5要素をサポートするように設定
    }
    add_action('after_setup_theme','my_setup');
    // テーマがロードされたらmy_setup関数を実行する

    // css,js 불러오기
    function my_script_init(){
        wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap", false);
        wp_enqueue_style("swiper-style", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), null, "all");
        wp_enqueue_style("style", get_template_directory_uri()."/css/style.css", array(), filemtime(get_theme_file_path("/css/style.css")), "all");
        wp_enqueue_script("script", get_template_directory_uri()."/js/script.js", array("jquery"), filemtime(get_theme_file_path("/js/script.js")), true);    
        wp_enqueue_script("drawer", get_template_directory_uri()."/js/drawer.js", array("jquery"), filemtime(get_theme_file_path("/js/drawer.js")), true);
        wp_enqueue_script("swiper-script", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array('jquery'), '11.1.1', true);
        wp_enqueue_script("my-swiper-script", get_template_directory_uri()."/js/swiper.js", array('jquery'), filemtime(get_theme_file_path("/js/swiper.js")), true);
    }
    add_action("wp_enqueue_scripts","my_script_init");

    // // 呼び出し元のページに応じてis-activeを出力する関数
    // // クラス名を使用する場所でprintIsActiveClass();を呼び出す
    // function printIsActiveClass(){
    //     if(is_front_page()){
    //         echo 'is-active';
    //     }
    //     //elseif(){}
    // }

    function printPostTypeLabel($post_name){
        $post_type_obj = get_post_type_object($post_name);
        if(!empty($post_type_obj)){
            echo $post_type_obj->labels->singular_name;
        }
        echo '';
    }

    function printPostTypeDescription($post_name){
        $post_type_obj = get_post_type_object($post_name);
        if (!empty($post_type_obj) && !empty($post_type_obj->description)) {
            // カスタム投稿タイプの説明を出力します。
            echo $post_type_obj->description;
        } else {
            echo '説明が設定されていません。';
        }
    }

    function getPageLink($slug){
        $page = get_page_by_path($slug);
        if($page){
            return get_permalink($page->ID);
        }
        else{
            return home_url('/');
        }
    }
?>