<?php

namespace DRPSermonManager;

$permalinks = App::getPermalinkStructureInt()->get();

return [
    'labels' => [
        'name' => __('Sermons', DOMAIN),
        'singular_name' => __('Sermon', DOMAIN),
        'all_items' => __('Sermons', DOMAIN),
        'menu_name' => _x('Sermons', 'menu', DOMAIN),
        'add_new' => __('Add New', DOMAIN),
        'add_new_item' => __('Add new sermon', DOMAIN),
        'edit' => __('Edit', DOMAIN),
        'edit_item' => __('Edit sermon', DOMAIN),
        'new_item' => __('New sermon', DOMAIN),
        'view' => __('View sermon', DOMAIN),
        'view_item' => __('View sermon', DOMAIN),
        'search_items' => __('Search sermon', DOMAIN),
        'not_found' => __('No sermons found', DOMAIN),
        'not_found_in_trash' => __('No sermons found in trash', DOMAIN),
        'featured_image' => __('Sermon image', DOMAIN),
        'set_featured_image' => __('Set sermon image', DOMAIN),
        'remove_featured_image' => __('Remove sermon image', DOMAIN),
        'use_featured_image' => __('Use as sermon image', DOMAIN),
        'insert_into_item' => __('Insert to sermon', DOMAIN),
        'uploaded_to_this_item' => __('Uploaded to this sermon', DOMAIN),
        'filter_items_list' => __('Filter sermon', DOMAIN),
        'items_list_navigation' => __('Sermon navigation', DOMAIN),
        'items_list' => __('Sermon list', DOMAIN),
    ],
    'public' => true,
    'show_ui' => true,
    'capability_type' => Constant::POST_TYPE_SERMON,
    'capabilities' => [
        Constant::CAP_MANAGE_CATAGORIES => Constant::CAP_MANAGE_CATAGORIES,
        Constant::CAP_MANAGE_SETTINGS => Constant::CAP_MANAGE_SETTINGS,
    ],
    'map_meta_cap' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_in_menu' => true,
    'menu_icon' => 'icon-drpsermon',
    'hierarchical' => false,
    'rewrite' => [
        'slug' => $permalinks[Constant::POST_TYPE_SERMON],
        'with_front' => false,
    ],
    'query_var' => true,
    'show_in_nav_menus' => true,
    'show_in_rest' => true,
    'has_archive' => true,

    'supports' => [
        'title',
        'thumbnail',
        'publicize',
        'wpcom-markdown',
        'comments',
        'entry-views',
        'elementor',
        'excerpt',
        'revisions',
        'author',
        'editor',
    ],
];