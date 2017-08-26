function view(id){
    $.get( $url, function( data ) {
        alert( "Load was performed." );
    },'json');
}