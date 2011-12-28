<?php

/**
 * Single User Edit Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php bbp_get_template_part( 'bbpress/user', 'details' ); ?>

	<?php bbp_get_template_part( 'bbpress/form', 'user-edit' ); ?>

</div>
