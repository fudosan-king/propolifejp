<?php $dir_name = 'event'; ?>
<?php
$post_id = $post -> ID;
$top_text = get_field('top_text');
?>
<?php get_header(); ?>
<div id="contents">

<?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/event/img_title_h2_social.png" style="height:42px; max-width:680px;" alt="EVENT"></h2>
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
    $numPage = isset($_GET['page']) && !empty($_GET['page']) ? 'page/'.$_GET['page'].'/' : '';
 ?>
<script>
    /*
     * Khanh Nguyen (KN) - Ajax get data and process.
     */

    $.get('https://works-event.chronicle-web.com/event_pref/nagoya/<?php echo $numPage; ?>' , function(data){

      $('#main-data').html($(data).find('#main').html());
      $('#container-data').html($(data).find('#container').html());

      $('#main-data').find('a').each(function(){
        $(this).attr('href', $(this).prop('baseURI'));
      });

      $('#container-data').find('.box a').each(function(){
        var pID = $(this).prop('pathname').split('/')[2];

        // $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
        //    $(this).attr('href', $(this).prop('baseURI')+'details/?p=' + pID);
        //    $(this).attr('target', '_blank');
        // });

        $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) +'event-detail/?p=' + pID);
         $(this).attr('target', '_blank');

      });

      $('#container-data #localNav').find('a').each(function(){
        var pathName = $(this).prop('pathname');
        var arrPathName = pathName.substring(1, pathName.length-1).split('/');
        var strPath = arrPathName[0];
        if(arrPathName.length > 1){
          for(var i = 1; i < arrPathName.length; i++){
            strPath = strPath + '-' + arrPathName[i];
          }
        }
        strPath = strPath + '/';
        $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
           $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) + strPath);
           // $(this).attr('target', '_blank');
        });
      });

      $('#container-data').find('.pager a').each(function(){
        var pageNum = $(this).prop('outerText');
        $(this).attr('href',  $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) + 'event_pref-nagoya/?page=' + pageNum);
       });

    });

    /*
     * END - Khanh Nguyen (KN) - Ajax get data and process.
     */
</script>

<?php get_footer(); ?>
