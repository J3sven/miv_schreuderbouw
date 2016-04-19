            <?php wp_footer(); ?>
                <div class="miv_footer miv_row row">
                    <div class=" miv_column col-md-3">
                        <div class="miv_footerzebra"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/zebra400.png" alt=""></div>
                    </div>
                    <div class=" miv_column col-md-6">
                        <div class="miv_footericonen">
                            <div class="row">
                                <?php if ( is_active_sidebar( 'home_footer_1' ) ) :

                                $mysidebars = wp_get_sidebars_widgets();
                                $total_widgets = count( $mysidebars['home_footer_1'] );
                                $limit_allowed=6;
                                $remove_widgets = $total_widgets - $limit_allowed;

                            if ($total_widgets > $limit_allowed) {
                                    echo '<div class="col-md-6"><span style="color: red"> U heeft <strong>'.$total_widgets.'</strong> widgets aan deze sidebar toegevoegd, dit verstrijkt het limiet van deze sidebar van <strong>'.$limit_allowed.'</strong> widgets! Gelieve <strong>'.$remove_widgets.'</strong> widget(s) verwijderen om de sidebar weer te geven. </span></div>';
                                    } else { 
                                    dynamic_sidebar( 'home_footer_1' ); 
                            }; 
                            endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class=" miv_column miv_corner col-md-2">
                        <div class="miv_footertext">
                                                           <?php if ( is_active_sidebar( 'home_footer_2' ) ) :

                                $mysidebars = wp_get_sidebars_widgets();
                                $total_widgets = count( $mysidebars['home_footer_2'] );
                                $limit_allowed=1;
                                $remove_widgets = $total_widgets - $limit_allowed;

                            if ($total_widgets > $limit_allowed) {
                                    echo '<div class="col-md-6"><span style="color: red"> U heeft <strong>'.$total_widgets.'</strong> widgets aan deze sidebar toegevoegd, dit verstrijkt het limiet van deze sidebar van <strong>'.$limit_allowed.'</strong> widgets! Gelieve <strong>'.$remove_widgets.'</strong> widget(s) verwijderen om de sidebar weer te geven. </span></div>';
                                    } else { 
                                    dynamic_sidebar( 'home_footer_2' ); 
                            }; 
                            endif; ?>

                            </div>
                    </div>
                    <div class="miv_column_spec col-md-1"></div>
                </div>
                    <div class="miv_row row">
                        <div class=" miv_column miv_spacer2 col-md-12"></div>
                    </div>

            </body>