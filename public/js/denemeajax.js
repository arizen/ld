setInterval( function () {

    jQuery( document ).ready( function( $ ) {
 
            $.post("profile/drc",
            function( data ) {
                if( $( "#duoRequests" ).html() != data && data > 0 ){
                    $( "#duoRequests" ).html(data);
                    yeniDuoTeklifleriVar();
                }
                
            },
            'json'
        );

        return false;
} );

}, 10000);

setInterval( function () {

    jQuery( document ).ready( function( $ ) {
 
            $.post("profile/mcc",
            function( data ) {
                $( "#messageRequests" ).html(data);
                
            },
            'json'
        );

        return false;
} );

}, 10000);

function yeniDuoTeklifleriVar(){
            notif({
                msg: "Yeni duo teklifleri var!",
                type: "info",
                position: "center",
                autohide: false
            });
        } 

