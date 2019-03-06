<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: This is the very first plugin I ever created. Changes the "Continue reading" text to "Click to Read!"
 * Version: 1.0
 * Author: Tricia Pardave
 * Author URI: http://yourwebsiteurl.com/
 **/


function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}
