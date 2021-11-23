<?php

function cc_register_coach_quote_type() {
  $labels = array(
    'name' => __( 'Coach Quotes', CCDOMAIN ),
    'singular_name' => __( 'Coach Quote', CCDOMAIN ),
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
  );

  register_post_type( 'coach_quote', $args );
}

?>