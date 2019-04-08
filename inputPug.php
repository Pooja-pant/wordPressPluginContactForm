<?php
/**
 *plugin Name: inputPug
 *Description: Simple form plugin

 */
/*

**/
function somePlugin() {
    echo '<form action="https://www.trippyigloo.com/lead_intern/" method="post">';
    echo '<p>';
    echo 'Your Email (required) <br />';
    echo '<input type="phone" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="' . ( isset( $_POST["email"] ) ? esc_attr( $_POST["email"] ) : '' ) . '" size="40" required />';
    echo '</p>';
    echo '<p>';
    echo 'Phone Number (required) <br />';
    echo '<input type="phone" name="phone" pattern="[0-9]+" value="' . ( isset( $_POST["phone"] ) ? esc_attr( $_POST["phone"] ) : '' ) . '" maxlength="10" required/>';
    echo '</p>';
    echo '<p>';
    echo 'Group Size(required) <br />';
    echo '<input type="number" name="group_size" value=" ' . ( isset( $_POST["group_size"] ) ? esc_attr( $_POST["group_size"] ) : '' ) . '" />';
    echo '</p>';
    echo '<p>';
    echo 'Tour Date(required) <br />';
    echo '<input type="date" name="tour_date" value=" '. ( isset( $_POST["tour_date"] ) ? esc_attr( $_POST["tour_date"] ) : '' ) . '" />';
    echo '</p>';
    echo '<p><input type="submit" /></p>';
    echo '</form>';
}
 
 
  
add_shortcode('inputPug', 'somePlugin');
?>