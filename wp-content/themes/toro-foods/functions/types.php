<?php
add_action( 'init', function () {
    $args = [
        'singular' => 'Recipe',
        'plural' => "Recipes",
    ];
    
    register_post_type( 'recipe', [
        'label' => 'Recipes',
        'labels' => [
            'name'                     => sprintf('%s', $args['plural']),                                // Default is "Posts".
            'singular_name'            => sprintf('%s', $args['singular']),                              // Default is "Post".
            // 'menu_name'             => sprintf('%s', $args['plural']),                                // Default is the same as 'name'.
            // 'add_new'               => sprintf('Add %s', $args['singular']),                          // Default is "Add New".
            'add_new_item'             => sprintf('Add New %s', $args['singular']),                      // Default is "Add New Post",
            // 'edit'                  => sprintf('Edit %s', $args['singular']),                         // Undocumented.
            'edit_item'                => sprintf('Edit %s', $args['singular']),                         // Default is "Edit Post".
            'new_item'                 => sprintf('New %s', $args['singular']),                          // Default is "New Post".
            // 'name_admin_bar'        => sprintf('%s', $args['singular']),                              // Default is the same as `singular_name`.
            // 'view'                  => sprintf('View %s', $args['singular']),                         // Undocumented.
            'view_item'                => sprintf('View %s', $args['singular']),                         // Default is "Post".
            'view_items'               => sprintf('View %s', $args['plural']),                           // Default is "Post".
            'search_items'             => sprintf('Search %s', $args['plural']),                         // Default is "Search Post".
            'not_found'                => sprintf('No %s found', strtolower($args['plural'])),           // Default is "No posts found".
            'not_found_in_trash'       => sprintf('No %s found in Trash', strtolower($args['plural'])),  // Default is "No posts found in Trash".
            // 'parent'                => sprintf('Parent %s', $args['singular']),                       // Undocumented
            'parent_item_colon'        => sprintf('Parent:', $args['singular']),                         // Default is "Parent Page:".
            'all_items'                => sprintf('All %s', $args['plural']),                            // Default is "All Posts",
            'archives'                 => sprintf('%s Archives', $args['singular']),                     // Default is "Post Archives".
            'attributes'               => sprintf('%s Attributes', $args['singular']),                   // Default is "Post Attributes".
            'insert_into_item'         => sprintf('Insert into %s', strtolower($args['singular'])),      // Default is "Insert into post".
            'uploaded_to_this_item'    => sprintf('Uploaded to this %s', strtolower($args['singular'])), // Default is "Uploaded to this post/Uploaded to this page".
            'featured_image'           => sprintf('%s Image', $args['singular']),                        // Default is "Featured Image".
            'set_featured_image'       => sprintf('Set %s image', strtolower($args['singular'])),        // Default is "Set featured image".
            'remove_featured_image'    => sprintf('Remove %s image', strtolower($args['singular'])),     // Default is "Remove featured image".
            'use_featured_image'       => sprintf('Use as %s image', strtolower($args['singular'])),     // Default is "Use as featured image".
            // 'filter_items_list'     => sprintf('', $args['plural']),                                     // Default is ?.
            // 'items_list_navigation' => sprintf('', $args['plural']),                                     // Default is ?.
            // 'items_list'            => sprintf('', $args['plural']),                                     // Default is ?.
            'item_published'           => sprintf('%s published', $args['singular']),                    // Default is "Post published."
            'item_published_privately' => sprintf('%s published privately.', $args['singular']),         // Default is "Post published privately."
            'item_reverted_to_draft'   => sprintf('%s reverted to draft.', $args['singular']),           // Default is "Post reverted to draft."
            'item_scheduled'           => sprintf('%s scheduled.', $args['singular']),                   // Default is "Post scheduled."
            'item_updated'             => sprintf('%s updated.', $args['singular']),                     // Default is "Post updated."
        ],
        'rewrite' => [
            'slug'       => 'recipes',
            'with_front' => false,
        ],
        'supports' => [
            'title',  // default
            'editor', // default
            'revisions',
            'excerpt',
            'thumbnail',
            'comments',
        ],
        'has_archive' => 'recipes',
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-text-page',
    ] );
} );

add_action( 'init', function () {
    $args = [
        'singular' => 'Product',
        'plural' => "Products",
    ];
    
    register_post_type( 'product', [
        'label' => 'Products',
        'labels' => [
            'name'                     => sprintf('%s', $args['plural']),                                // Default is "Posts".
            'singular_name'            => sprintf('%s', $args['singular']),                              // Default is "Post".
            // 'menu_name'             => sprintf('%s', $args['plural']),                                // Default is the same as 'name'.
            // 'add_new'               => sprintf('Add %s', $args['singular']),                          // Default is "Add New".
            'add_new_item'             => sprintf('Add New %s', $args['singular']),                      // Default is "Add New Post",
            // 'edit'                  => sprintf('Edit %s', $args['singular']),                         // Undocumented.
            'edit_item'                => sprintf('Edit %s', $args['singular']),                         // Default is "Edit Post".
            'new_item'                 => sprintf('New %s', $args['singular']),                          // Default is "New Post".
            // 'name_admin_bar'        => sprintf('%s', $args['singular']),                              // Default is the same as `singular_name`.
            // 'view'                  => sprintf('View %s', $args['singular']),                         // Undocumented.
            'view_item'                => sprintf('View %s', $args['singular']),                         // Default is "Post".
            'view_items'               => sprintf('View %s', $args['plural']),                           // Default is "Post".
            'search_items'             => sprintf('Search %s', $args['plural']),                         // Default is "Search Post".
            'not_found'                => sprintf('No %s found', strtolower($args['plural'])),           // Default is "No posts found".
            'not_found_in_trash'       => sprintf('No %s found in Trash', strtolower($args['plural'])),  // Default is "No posts found in Trash".
            // 'parent'                => sprintf('Parent %s', $args['singular']),                       // Undocumented
            'parent_item_colon'        => sprintf('Parent:', $args['singular']),                         // Default is "Parent Page:".
            'all_items'                => sprintf('All %s', $args['plural']),                            // Default is "All Posts",
            'archives'                 => sprintf('%s Archives', $args['singular']),                     // Default is "Post Archives".
            'attributes'               => sprintf('%s Attributes', $args['singular']),                   // Default is "Post Attributes".
            'insert_into_item'         => sprintf('Insert into %s', strtolower($args['singular'])),      // Default is "Insert into post".
            'uploaded_to_this_item'    => sprintf('Uploaded to this %s', strtolower($args['singular'])), // Default is "Uploaded to this post/Uploaded to this page".
            'featured_image'           => sprintf('%s Image', $args['singular']),                        // Default is "Featured Image".
            'set_featured_image'       => sprintf('Set %s image', strtolower($args['singular'])),        // Default is "Set featured image".
            'remove_featured_image'    => sprintf('Remove %s image', strtolower($args['singular'])),     // Default is "Remove featured image".
            'use_featured_image'       => sprintf('Use as %s image', strtolower($args['singular'])),     // Default is "Use as featured image".
            // 'filter_items_list'     => sprintf('', $args['plural']),                                     // Default is ?.
            // 'items_list_navigation' => sprintf('', $args['plural']),                                     // Default is ?.
            // 'items_list'            => sprintf('', $args['plural']),                                     // Default is ?.
            'item_published'           => sprintf('%s published', $args['singular']),                    // Default is "Post published."
            'item_published_privately' => sprintf('%s published privately.', $args['singular']),         // Default is "Post published privately."
            'item_reverted_to_draft'   => sprintf('%s reverted to draft.', $args['singular']),           // Default is "Post reverted to draft."
            'item_scheduled'           => sprintf('%s scheduled.', $args['singular']),                   // Default is "Post scheduled."
            'item_updated'             => sprintf('%s updated.', $args['singular']),                     // Default is "Post updated."
        ],
        'rewrite' => [
            'slug'       => 'products',
            'with_front' => false,
        ],
        'supports' => [
            'title',  // default
            'editor', // default
            'revisions',
            'excerpt',
            'thumbnail',
        ],
        'has_archive' => 'product',
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-cart',
    ] );
} );



