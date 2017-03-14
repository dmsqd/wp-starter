<?php
/****************** WORDPRESS SOCIAL LINKS CONTROL ******************/

add_action( 'customize_register', 'dm2_customize_register' );
function dm2_customize_register($wp_customize) {

    // SECTION
    $wp_customize->add_section( 'social_links' , array(
        'title'      => __('Social Links','wp-starter'),
        'priority'   => 40,
    ) );

    $social = array(
        array( 'slug' => 'facebook_url', 'default' => '', 'label' => __( 'Facebook Url', 'wp-starter' ) ),
        array( 'slug' => 'twitter_url', 'default' => '', 'label' => __( 'Twitter Url', 'wp-starter' ) ),
        array( 'slug' => 'linkedin_url', 'default' => '', 'label' => __( 'LinkedIn Url', 'wp-starter' ) ),
        // array( 'slug' => 'googleplus_url', 'default' => '', 'label' => __( 'Google Plus Url', 'wp-starter' ) ),
        // array( 'slug' => 'tumblr_url', 'default' => '', 'label' => __( 'Tumblr Url', 'wp-starter' ) ),
        // array( 'slug' => 'instagram_url', 'default' => '', 'label' => __( 'Instagram Url', 'wp-starter' ) ),
    );

    foreach( $social as $socials ) {
        // SETTINGS
        $wp_customize->add_setting( $socials['slug'], array( 'default' => $socials['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));

        // CONTROLS
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $socials['slug'], array( 'label' => $socials['label'], 'section' => 'social_links', 'settings' => $socials['slug'] )));
    }
}


/****************** WEBSITE CUSTOMS ************************/

add_action( 'customize_register', 'content_customize_register' );
function content_customize_register($wp_customize) {

    // SECTION
    $wp_customize->add_section( 'contact_details', array(
        'title'      => __('Contact Details','wp-starter'),
        'priority'   => 30,
    ) );

    $contacts = array(
        array( 'slug' => 'company_name', 'default' => '', 'label' => __( 'Company Name', 'wp-starter' ) ),
        array( 'slug' => 'phone', 'default' => '', 'label' => __( 'Phone Number', 'wp-starter' ) ),
        array( 'slug' => 'email', 'default' => '', 'label' => __( 'Email Address', 'wp-starter' ) ),
        array( 'slug' => 'address', 'default' => '', 'label' => __( 'Company Address', 'wp-starter' ) ),
        array( 'slug' => 'postcode', 'default' => '', 'label' => __( 'Company Postcode', 'wp-starter' ) ),
        // array( 'slug' => 'fax', 'default' => '', 'label' => __( 'Fax Number', 'wp-starter' ) ),
        // array( 'slug' => 'company_number', 'default' => '', 'label' => __( 'Company Reg Number', 'wp-starter' ) ),
        // array( 'slug' => 'vat_number', 'default' => '', 'label' => __( 'VAT Number', 'wp-starter' ) ),
    );

    foreach( $contacts as $contact ) {
        // SETTINGS
        $wp_customize->add_setting( $contact['slug'], array( 'default' => $contact['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));

        // CONTROLS
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $contact['slug'], array( 'label' => $contact['label'], 'section' => 'contact_details', 'settings' => $contact['slug'] )));
    }
}

/******************* CUSTOM LOGO *********************/

add_action( 'customize_register', 'logo_customize_register' );
function logo_customize_register($wp_customize) {

    // SECTION
    $wp_customize->add_section( 'logo_section' , array(
            'title'       => __( 'Logo', 'dm2' ),
            'priority'    => 20,
            'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
            'label'    => __( 'Logo', 'themeslug' ),
            'section'  => 'logo_section',
            'settings' => 'logo',
    ) ) );

}

?>
