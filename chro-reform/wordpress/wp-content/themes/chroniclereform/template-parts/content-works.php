<!--======== ▼Article start ===========-->
<article class="boxArticle">

    <div id="container-data">


    </div>

    <script>
        /*
         * Khanh Nguyen (KN) - Ajax get data and process.
         */

         var getQueryStr = function(){

            var href = window.location.href;
            var res = {};
            if (href.indexOf('?')>=0){
                var str = href.substring(href.indexOf('?') + 1, href.length);
                var params = str.split("&");
                params.forEach(function(data){
                    var obj = data.split("=");
                    res[obj[0]] = obj[1];
                });
            }

            return res;
        }

        var numPage = '';

        if (typeof getQueryStr()['page'] !== 'undefined'){
            numPage = 'page/' + getQueryStr()['page'] + '/';

        }

        $.get('https://works-event.chronicle-web.com/works/' + numPage, function(data){

          $('#container-data').html($(data).find('#container').html());

          $('#container-data').find('.imgBox > a').each(function(){
            var pID = $(this).prop('pathname').split('/')[2];

            $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
               $(this).attr('href', $(this).prop('baseURI').substring(0, $(this).prop('baseURI').indexOf('.com/') + 5) +'reform/works-detail/?p=' + pID);
               $(this).attr('target', '_blank');
            });

          });

          $('#container-data').find('.catch').remove();
          $('#container-data').find('#localNav').remove();
          $('#container-data').find('.pager').remove();

          var liArr = $('#container-data #listBox li');
          var latestWorks = liArr.slice(0, 3);

          $.each($('#container-data #listBox li'), function(i, e){
            if($.inArray(e, latestWorks) < 0){
              e.remove();
            }
          })

        });

        /*
         * END - Khanh Nguyen (KN) - Ajax get data and process.
         */
    </script>



</article>
<!--======== //Article end ===========-->
