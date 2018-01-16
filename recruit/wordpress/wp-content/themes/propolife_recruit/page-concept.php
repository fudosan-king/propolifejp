<?php
global $temp_dir;
$dir_name = 'concept';
?>
<?php
    $page_title = get_the_title();
    $concept_copy = get_field('concept_copy');
    $concept_text = get_field('concept_text');
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/concept/img_title_h2.png" alt="CONCEPT" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/concept/img_title_h2_sp.png" alt="MESSAGE" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
    </div>
    <div id="page_concept">
       <!--
        <p class="copy"><?php echo $concept_copy; ?></p>
        <p><?php echo $concept_text; ?></p>
        -->
	<div class="ceo">
            <div class="ceo__message">
                <p>私はしばらくの間、ある１つのプロジェクトに取り組んできました。そしてそれは現在、ようやく少し実を結びつつあります。そのプロジェクトとは、新たな人財評価システムの構築です。<br>
		これまでの10年間、私たちは基本的に評価＝成果でした。ベンチャー企業であれば大なり小なり、当初はそうだと思います。しかし、次のフェーズへ移行する一環として（もちろん現在でも成果は大事な評価要素となりますが）、当社評価システムに適切な行動評価を新たに加える作業を行ってきました。<br>
		現在新システムのトライアルを行っていますが、以前よりも確かな手応えを感じています。また、その評価シートに基づき年２回の面談を行い、上司から半期評価を貴方自身に必ず直接伝えます。ここで自己評価との比較を行って下さい。そして次の半期、１年にその評価を活かしましょう。貴方の成長スピードは通常の何倍にも上がるはずです。<br>
<br>
		年々より良い労働環境を整え、１年ごとに別会社のように変化していく当社。成長スピードが早い分、チャンスはあちこちに存在します。色々な意味でスピードが速い我々が、目指す基本的な概念は「少数精鋭」と「時間のメリハリ」です。そしてそこを目指すという事は、時間の概念が最も重要となってきます。<br>
		時間は平等ではありません。如何に１分１秒の価値を上げていくかが、この２つの概念にとって非常に重要な要素です。私たちは何時間働いた、何分働いたという時間概念を持ち合わせておりません。１分１秒をどういった過ごし方をしたか、そこを突き詰めることがメリハリ、時間の緩急を生み出します。それらは私が創業以来大事にしてきた、人財を見極める価値観となります。<br>
<br>
		また、私が人財を見極める上で最も大事にしている価値観は「責任感」と「向上心」です。責任感とは分かりやすく言えば、「プロフェッショナルの意地」です。例えば未経験で入社してくれば、先輩社員に当然経験値では負けます。しかし新人ながらこの「責任感」を持っていれば、たとえ入社何ヶ月でも「プロフェッショナルの意地」は発揮できるのです。具体的に言えば、事前に勉強してから臨むことであったり、分からないことを素直に聞く事であったり、新入社員の「プロフェッショナルの意地」は確実に存在します。<br>
		日々勉強することがとても大事なのですが、これが私が言う「向上心」になります。成功している上司、先輩社員は何をどう考え実行しているのか。全ては勉強、そしてそれは自分自身を向上させる事ができる唯一の方法なのです。私は現在も向上心を持って日々勉強しています。そしてそれが未だに、私に「プロフェッショナルの意地」を与えてくれます。みなさんと共に「向上心」を持って日々勉強し、「責任感」を持って「プロフェッショナルの意地」をお見せする事が出来れば、こんなに嬉しいことはありません。共に成長していける方との出会いを楽しみにしています。
</p>
                <p class="tar mt15">株式会社プロポライフグループ</p>
                <p class="tar">代表取締役社長</p>
                <p class="tar">野澤泰之</p>

            </div>
        </div>
    </div>
<style>
    
    .tar {
        text-align: right;
    }
    .pd5 {
        padding-top: 5px;
    }
    .mt15 {
        margin-top: 15px;
    }
    
.ceo{
    font-family: "MS 明朝", "ヒラギノ明朝 ProN W6", "HiraMinProN-W6", "HG明朝E", "ＭＳ Ｐ明朝", "MS PMincho", serif;
    font-weight: 100;
  margin-top: 10px;
  padding: 20px 10px;
  display: table;
  width: 100%;
}
.ceo__image{
    display:block;
    width:70%;
    margin:0 auto;
    vertical-align:top;
    }
.ceo__image p{
  text-align: center;
  font-size: 15px;
  line-height: 1.4;
  font-weight:normal;
}
.ceo__message{
  vertical-align:top;
  padding-left:10px;
  margin-top: 10px;
  line-height: 1.75;
  font-size: 14px;
  text-align: left;
}
    @media screen and (max-width: 768px) {
        .ceo__image{
            display:block;
            width:100%;
            vertical-align:top;
            margin-bottom: 10px;
        }
        
        .ceo__image img{
            width: 50%;
            margin: 0 auto;
        }
        .ceo__message{
            display:block;
            vertical-align:top;
            padding-left:0;
            width:100%;
            line-height: 1.4;
            font-size: 12px;
            text-align: left;
        }
    }
</style>
</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<?php get_footer(); ?>