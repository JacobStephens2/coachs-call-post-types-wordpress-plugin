<?php

function cc_register_coach_quote_type() {
  $labels = array(
    'name'          => __( 'Coach Quotes', CCDOMAIN ),
    'singular_name' => __( 'Coach Quote', CCDOMAIN ),
  );

  $args = array(
    'labels'         => $labels,
    'public'         => true,
    'show_in_rest'	 => true,
    'rest_base'	     => 'coach-quotes',
    'show_in_graphql' => true,
    'graphql_single_name' => 'coachQuote',  
    'graphql_plural_name' => 'coachQuotes',
  );

  register_post_type( 'coach_quote', $args );
}

?>