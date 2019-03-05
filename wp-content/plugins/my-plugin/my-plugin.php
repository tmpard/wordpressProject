<?php
/**
 * Created by PhpStorm.
 * User: Tricia Pardave
 * Date: 3/5/2019
 * Time: 5:20 PM
 */

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );

