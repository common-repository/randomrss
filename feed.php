<?php
require_once('../../../wp-admin/admin-post.php');
function randomrss_createfeed() { 
$randomrss_feedtitle = get_bloginfo('name') . ' Random RSS Feed';
$randomrss_feedurl = get_site_url().'/wp-content/plugins/randomrss/feed.php';
$randomrss_feedxml = '';
if(isset($_GET['datemax']) && isset($_GET['datemin']))
{
    $datemax = explode("-",$_GET['datemax']);
    $datemin = explode("-",$_GET['datemin']);
    if(isset($_GET['category']) && isset($_GET['tag']))
 {
 $randomrss_feedtitle = sanitize_text_field($_GET['category']).' '.sanitize_text_field($_GET['tag']);
 $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']).'&tag='.sanitize_text_field($_GET['tag']);
 $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif (isset($_GET['category']))
{
	 $randomrss_feedtitle = sanitize_text_field($_GET['category']) . ' Category Random RSS Feed';
     $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif(isset($_GET['tag']))
{
     $randomrss_feedtitle = sanitize_text_field($_GET['tag']) . ' Tag Random RSS Feed';
     $randomrss_feedurl .= '?tag='.sanitize_text_field($_GET['tag']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}else{
        $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10,
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}
    // NEXT PART ************************************************************
}else if(isset($_GET['datemin']))
{
    $datemin = explode("-",$_GET['datemin']);
    if(isset($_GET['category']) && isset($_GET['tag']))
 {
 $randomrss_feedtitle = sanitize_text_field($_GET['category']).' '.sanitize_text_field($_GET['tag']);
 $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']).'&tag='.sanitize_text_field($_GET['tag']);
 $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif (isset($_GET['category']))
{
	 $randomrss_feedtitle = sanitize_text_field($_GET['category']) . ' Category Random RSS Feed';
     $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif(isset($_GET['tag']))
{
     $randomrss_feedtitle = sanitize_text_field($_GET['tag']) . ' Tag Random RSS Feed';
     $randomrss_feedurl .= '?tag='.sanitize_text_field($_GET['tag']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}else{
        $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10,
    'date_query' => array(
        array(
            'after'     => array(
                'year'  => $datemin[0],
                'month' => $datemin[1],
                'day'   => $datemin[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}
      // NEXT PART *************************************************************
}else if(isset($_GET['datemax']))
{
    $datemax = explode("-",$_GET['datemax']);
    if(isset($_GET['category']) && isset($_GET['tag']))
 {
 $randomrss_feedtitle = sanitize_text_field($_GET['category']).' '.sanitize_text_field($_GET['tag']);
 $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']).'&tag='.sanitize_text_field($_GET['tag']);
 $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif (isset($_GET['category']))
{
	 $randomrss_feedtitle = sanitize_text_field($_GET['category']) . ' Category Random RSS Feed';
     $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'date_query' => array(
        array(
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}elseif(isset($_GET['tag']))
{
     $randomrss_feedtitle = sanitize_text_field($_GET['tag']) . ' Tag Random RSS Feed';
     $randomrss_feedurl .= '?tag='.sanitize_text_field($_GET['tag']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'tag' => sanitize_text_field($_GET['tag']),
    'date_query' => array(
        array(
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}else{
    $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10,
    'date_query' => array(
        array(
            'before'    => array(
                'year'  => $datemax[0],
                'month' => $datemax[1],
                'day'   => $datemax[2],
            ),
            'inclusive' => true,
        ),
    ),
    );
}
     // NEXT PART *************************************************************
}else
{
     if(isset($_GET['category']) && isset($_GET['tag']))
 {
 $randomrss_feedtitle = sanitize_text_field($_GET['category']).' '.sanitize_text_field($_GET['tag']);
 $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']).'&tag='.sanitize_text_field($_GET['tag']);
 $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    'tag' => sanitize_text_field($_GET['tag']),
    );
}elseif (isset($_GET['category']))
{
	 $randomrss_feedtitle = sanitize_text_field($_GET['category']) . ' Category Random RSS Feed';
     $randomrss_feedurl .= '?category='.sanitize_text_field($_GET['category']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'category_name' => sanitize_text_field($_GET['category']),
    );
}elseif(isset($_GET['tag']))
{
     $randomrss_feedtitle = sanitize_text_field($_GET['tag']) . ' Tag Random RSS Feed';
     $randomrss_feedurl .= '?tag='.sanitize_text_field($_GET['tag']);
     $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
	'tag' => sanitize_text_field($_GET['tag']),
    );
}else{
        $randomrss_args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 10, 
    );
}
}
$randomrss_the_query = new WP_Query( $randomrss_args );
 
if ( $randomrss_the_query->have_posts() ) {
 
$randomrss_feedxml .= '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?><rss version="2.0"><channel><title>'.esc_html($randomrss_feedtitle).'</title><link>'.esc_html($randomrss_feedurl).'</link><description>Ten random posts.</description>';
    while ( $randomrss_the_query->have_posts() ) {
        $randomrss_the_query->the_post();
        $randomrss_pubdate = '';
        if(isset($_GET['pubdate']))
        {
            if($_GET['pubdate'] == 'new')
            {
                $randomrss_dt = new DateTime();
                $randomrss_pubdate = $randomrss_dt->format('D, d M Y H:i:s +0000');
            }else
            {
                $randomrss_pubdate = mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false );
            }
        }else
        {
            $randomrss_pubdate = mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false );
        }
        $post_cats = get_the_category();
        $post_cat_name = $post_cats[0]->name;
        $randomrss_feedxml .= '<item><title><![CDATA[ '.esc_html(get_the_title()) .' ]]></title><description><![CDATA[ '.wp_kses_post(apply_filters('the_content', get_the_content())).' ]]></description><category>'.esc_html($post_cat_name).'</category><pubDate>'.esc_html($randomrss_pubdate).'</pubDate><link>'.esc_html(get_permalink()).'</link><guid>'.esc_html(get_permalink()).'</guid></item>';
    }
    $randomrss_feedxml .= '</channel></rss>';
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
 
$randomrss_feedxml .= 'no posts found';
}
 
return $randomrss_feedxml; 
} 
header( 'Content-Type: text/xml; charset='.get_option('blog_charset'));
echo randomrss_createfeed();