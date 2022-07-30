function get_states ( country_id ) {
    if ( country_id > 0 ) {

        jQuery.ajaxSetup ( {
            headers: {
                'X-CSRF-TOKEN': jQuery ( 'meta[name="csrf-token"]' ).attr ( 'content' )
            }
        } );

        jQuery.ajax ( {
            type: 'GET',
            url: '/states/' + country_id,
            beforeSend: function () {
                jQuery ( '#states' ).html ( '<li>Fetching...</li>' );
            },
            success: function ( response ) {
                jQuery ( '.link-' + country_id ).css ( 'pointer-events', 'all' );
                jQuery ( '#states' ).html ( response );
            }
        } )
    }
}

function get_cities ( city_id ) {
    if ( city_id > 0 ) {

        jQuery.ajaxSetup ( {
            headers: {
                'X-CSRF-TOKEN': jQuery ( 'meta[name="csrf-token"]' ).attr ( 'content' )
            }
        } );

        jQuery.ajax ( {
            type: 'GET',
            url: '/cities/' + city_id,
            beforeSend: function () {
                jQuery ( '#cities' ).html ( '<li>Fetching...</li>' );
            },
            success: function ( response ) {
                jQuery ( '#cities' ).html ( response );
            }
        } )
    }
}

jQuery ( document ).ready ( function () {

    jQuery ( '.countryBtn' ).on ( 'click', function () {
        let country_id = jQuery ( this ).data ( 'id' );
        get_states ( country_id );
    } );

    jQuery ( document ).on ( 'click', '.stateBtn', function () {
        let city_id = jQuery ( this ).data ( 'id' );
        get_cities ( city_id );
    } );

    jQuery ( "#countriesSearch" ).on ( "keyup", function () {
        let value = jQuery ( this ).val ().toLowerCase ();
        jQuery ( "#countries li" ).filter ( function () {
            jQuery ( this ).toggle ( jQuery ( this ).text ().toLowerCase ().indexOf ( value ) > -1 )
        } );
    } );

    jQuery ( "#stateSearch" ).on ( "keyup", function () {
        let value = jQuery ( this ).val ().toLowerCase ();
        jQuery ( "#states li" ).filter ( function () {
            jQuery ( this ).toggle ( jQuery ( this ).text ().toLowerCase ().indexOf ( value ) > -1 )
        } );
    } );

    jQuery ( "#citySearch" ).on ( "keyup", function () {
        let value = jQuery ( this ).val ().toLowerCase ();
        jQuery ( "#cities li" ).filter ( function () {
            jQuery ( this ).toggle ( jQuery ( this ).text ().toLowerCase ().indexOf ( value ) > -1 )
        } );
    } );
} );