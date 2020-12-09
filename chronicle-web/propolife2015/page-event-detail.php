<?php $dir_name = 'event'; ?>
<?php
$post_id = $post -> ID;
$top_text = get_field('top_text');

?>
<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/event/img_title_h2_social.png" style="height:42px; max-width:680px;" alt="event"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        <div id="section_event">
            <p class="event"><?php echo $top_text; ?></p>

        </div>

        <div id="main-data">


        </div>
        <div id="container-data">


        </div>

    </div>

 </div><!-- // #contents -->

 <?php
  $pID = isset($_GET['p']) && !empty($_GET['p']) ? $_GET['p'] : null;
  if ($pID != null){
    ?>
      <script>
        /*
         * Khanh Nguyen (KN) - Ajax get data and process.
         */

        var pID = '<?php echo $pID; ?>';

        $.get('https://works-event.chronicle-web.com/event/' + pID, function(data){

            $('#main-data').html($(data).find('#main').html());
            $('#container-data').html($(data).find('#container').html());

            $('#main-data').find('a').each(function(){
               $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) +  'event/');
            });

            $('#container-data').find('.pageList  a').each(function(){
                var pID = $(this).prop('pathname').split('/')[2];
                if (typeof pID !== 'undefined' && pID != ''){
                     $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) + 'event-detail/?p=' + pID);
                }else{
                    $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) +  'event/');
                }
            });

        });

        /*
         * END - Khanh Nguyen (KN) - Ajax get data and process.
         */
    </script>

    <?php
  }

 ?>



<?php get_footer(); ?>
