<?php if ( have_rows( 'outline3' ) ) : ?>
<table class="tbl-outline">
<?php while ( have_rows( 'outline3' ) ) : the_row(); ?>
    <tr>
        <th><?php the_sub_field( 'item' ); ?></th>
        <td><?php the_sub_field( 'content' ); ?></td>
    </tr>
<?php endwhile; ?>
</table>
<?php endif;
