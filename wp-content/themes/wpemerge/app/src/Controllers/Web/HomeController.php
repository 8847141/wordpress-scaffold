<?php

namespace YunluTheme\Controllers\Web;

class HomeController {
    public function index( $request, $view ) {
        // $request is a WP Emerge class which represents the current request
        // made to the server.
        // $view is the template filepath that WordPress is trying to load
        // for the current request.
    
        // If the request includes the "cta" GET parameter with a value of "0" ...
        if ( $request->query( 'cta' ) === '0' ) {
            // ... return the view WordPress was trying to load:
            return \YunluTheme::view( $view );
        }
    
        // otherwise, return our custom CTA view:
        //return \YunluTheme::view( '/view/template-cta.php' );

        $skip_url = add_query_arg( 'cta', '0', $request->getUrl() );

        return \YunluTheme::view( '/views/template-cta.php' )
            ->with( 'skip_url', $skip_url );
    }
}