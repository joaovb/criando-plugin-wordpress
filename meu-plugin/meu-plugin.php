<?php

/**
 * Plugin name: Meu plugin
 * Plugin uri: http://estudarti.com.br 
 * Description: Esse plugin é um plugin de teste do João Victor Barreto
 * Version: 1.0
 * Author: João Victor Barreto
 * Author uri: https://estudarti.com.br
 * License: GPLv2 or later
 */


function mp_message_post( $mp_post ) {
    $mp_mensagem = "Esta mensagem será mostrada no início de cada post";
    $mp_resultado = "<h1> $mp_mensagem </h1>";
    $mp_resultado .= $mp_post;

    return $mp_resultado;
}

add_filter( 'the_content', 'mp_message_post');

