<?php

$include_path = array(

    '../controller',


    '../model',

);



ini_set( 'include_path' , implode( PATH_SEPARATOR ,

    array_unique(

        array_merge(

            explode( PATH_SEPARATOR , ini_get( 'include_path' ) ),

            array_filter( array_map( 'realpath' , $include_path ) )

        )

    )

) );



function __autoload( $class ){

    require_once sprintf( '%s.php' , $class );

}
