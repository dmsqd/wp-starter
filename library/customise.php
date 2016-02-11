<?php
/*
Author: Hacksaw
URL: htp://hacksawstudio.com/

This is where you create new social links, new custom fields for company details, and image changes.
*/

/****************** WORDPRESS SOCIAL LINKS CONTROL ******************/

add_action( 'customize_register', 'dm2_customize_register' );
function dm2_customize_register($wp_customize) {

    // SECTION
    $wp_customize->add_section( 'social_links' , array(
        'title'      => __('Social Links','hacksawtheme'),
        'priority'   => 40,
    ) );

    $social = array(
        array( 'slug' => 'facebook_url', 'label' => __( 'Facebook Url', 'hacksawtheme' ) ),
        array( 'slug' => 'twitter_url', 'label' => __( 'Twitter Url', 'hacksawtheme' ) ),
        array( 'slug' => 'linkedin_url', 'label' => __( 'LinkedIn Url', 'hacksawtheme' ) ),
        // array( 'slug' => 'googleplus_url', 'label' => __( 'Google Plus Url', 'hacksawtheme' ) ),
        // array( 'slug' => 'tumblr_url', 'label' => __( 'Tumblr Url', 'hacksawtheme' ) ),
        // array( 'slug' => 'instagram_url', 'label' => __( 'Instagram Url', 'hacksawtheme' ) ),
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
        'title'      => __('Contact Details','hacksawtheme'),
        'priority'   => 30,
    ) );

    $contacts = array(
        array( 'slug' => 'company_name', 'label' => __( 'Company Name', 'hacksawtheme' ) ),
        array( 'slug' => 'phone', 'label' => __( 'Phone Number', 'hacksawtheme' ) ),
        array( 'slug' => 'email', 'label' => __( 'Email Address', 'hacksawtheme' ) ),
        array( 'slug' => 'address', 'label' => __( 'Company Address', 'hacksawtheme' ) ),
        array( 'slug' => 'postcode', 'label' => __( 'Company Postcode', 'hacksawtheme' ) ),
        // array( 'slug' => 'fax', 'label' => __( 'Fax Number', 'hacksawtheme' ) ),
        // array( 'slug' => 'company_number', 'label' => __( 'Company Reg Number', 'hacksawtheme' ) ),
        // array( 'slug' => 'vat_number', 'label' => __( 'VAT Number', 'hacksawtheme' ) ),
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
