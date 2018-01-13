$(document).ready(function () {
    console.log('ready');

    //dropzone();





$("#doctype").on('change',function()
{
    var keyword = $(this).val();
    $.ajax(
        {
            url:'/p/sharing',
            type:'GET',
            data: keyword,
            success:function(data)
            {
                //var d = JSON.parse(data);
                console.log("data" + data);
            }
        });

});

});



function dropzone(){
    //referentie: https://tympanus.net/codrops/2015/09/15/styling-customizing-file-inputs-smart-way/
    $( '.inputFile' ).each( function()
    {
        var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

        $input.on( 'change', function( e )
        {
            var fileName = '';

            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                $label.find( 'span' ).html( fileName );
            else
                $label.html( labelVal );
        });

        // Firefox bug fix
        $input
            .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
            .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
    });
}