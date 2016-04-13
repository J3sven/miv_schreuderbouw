<?php get_header(); ?>
        <div class="container">
            <div class="miv_row row">
                <div class="miv_column miv_blank col-md-12"></div>
            </div>
        </div>
        <div class="container-fluid">
            <span class="miv_iconbar">
        <div class="container">
            <div class="miv_row row">
                <div class=" miv_column col-md-3"></div>
                    <?php if ( is_active_sidebar( 'home_row_1' ) ) :

                                $mysidebars = wp_get_sidebars_widgets();
                                $total_widgets = count( $mysidebars['home_row_1'] );
                                $limit_allowed=3;
                                $remove_widgets = $total_widgets - $limit_allowed;

                            if ($total_widgets > $limit_allowed) {
                                    echo '<div class="col-md-6"><span style="color: red"> U heeft <strong>'.$total_widgets.'</strong> widgets aan deze sidebar toegevoegd, dit verstrijkt het limiet van deze sidebar van <strong>'.$limit_allowed.'</strong> widgets! Gelieve <strong>'.$remove_widgets.'</strong> widget(s) verwijderen om de sidebar weer te geven. </span></div>';
                                    } else { 
                                    dynamic_sidebar( 'home_row_1' ); 
                            }; 
                            endif; ?>
                <div class=" miv_column col-md-3"></div>
            </div>
            <div class="miv_row row">
                <div class=" miv_column miv_spacer2 col-md-12"></div>
            </div>
            <div class="miv_row row">
                <div class=" miv_column col-md-3"></div>
                    <?php if ( is_active_sidebar( 'home_row_2' ) ) :

                                $mysidebars = wp_get_sidebars_widgets();
                                $total_widgets = count( $mysidebars['home_row_2'] );
                                $limit_allowed=3;
                                $remove_widgets = $total_widgets - $limit_allowed;

                            if ($total_widgets > $limit_allowed) {
                                    echo '<div class="col-md-6"><span style="color: red"> U heeft <strong>'.$total_widgets.'</strong> widgets aan deze sidebar toegevoegd, dit verstrijkt het limiet van deze sidebar van <strong>'.$limit_allowed.'</strong> widgets! Gelieve <strong>'.$remove_widgets.'</strong> widget(s) verwijderen om de sidebar weer te geven. </span></div>';
                                    } else { 
                                    dynamic_sidebar( 'home_row_2' ); 
                            }; 
                            endif; ?>
                <div class=" miv_column col-md-3"></div>
            </div>
                    </div>
            </span>
    </div>
    <div class="container">
            <div class="miv_row row">
                <div class="miv_spacer col-md-12"></div>
            </div>
                            </div>
<?php get_footer(); ?>