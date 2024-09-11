<?php
    $template_uri = get_template_directory_uri();
    $main_menu_args = array(
        'theme_location' => 'secondary',
        'menu_id'        => 'secondary',
        'container'      => '',
        'items_wrap' => '%3$s'
    );
?>

<footer id="footer">
    <div class="inner">
        <div class="footer-block">
            <div class="footer-block__note">
                <a href="" class="footer-logo">
                    <img src="<?php echo $template_uri; ?>/img/common/footer-logo.png" alt="DENTAL CLINIC AOKI">
                </a>
                <ul class="footer-item">
                    <li>
                        <img src="<?php echo $template_uri; ?>/img/common/icon-15.png" alt="DENTAL CLINIC AOKI">
                        <p>
                            <span class="c-ft--en">〒151-0053</span><br> 東京都渋谷区代々木1−55−5<br class="sp">三共ビル1F </p>
                    </li>
                    <li>
                        <img src="<?php echo $template_uri; ?>/img/common/icon-16.png" alt="DENTAL CLINIC AOKI">
                        <p> JR山手線「代々木駅」北口から徒歩3分<br> 小田急線「南新宿駅」から徒歩5分 </p>
                    </li>
                </ul>
                <table class="footer-calendar">
                    <tr>
                        <th>診療時間</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                    </tr>
                    <tr>
                        <td><span>09:00</span><span>13:00</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>ー</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>ー</span></td>
                    </tr>
                    <tr>
                        <td><span>14:00</span><span>18:00</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>ー</span></td>
                        <td><span>●</span></td>
                        <td><span>●</span></td>
                        <td><span>ー</span></td>
                    </tr>
                </table>
                <p> 木曜・日曜・祝日は休診となります。<br class="sp">学会などにより休診となる場合もございます。<br> 受付は各診療終了時間30分前までとなります。 </p>
            </div>
            <div class="footer-block__maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12962.803334878457!2d139.70081!3d35.6843677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2e7f41387b%3A0xa6746d2db23c63f1!2z44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv6Z2S5pyo!5e0!3m2!1sja!2sjp!4v1724394195571!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <ul class="footer-menu">
        <?php wp_nav_menu($main_menu_args); ?>
    </ul>
    <div class="copyright"> © デンタルクリニック青木 </div>
</footer>
<div class="popup-tel">
    <div class="popup-block">
        <span class="popup-block__close js-close"><img src="<?php echo $template_uri; ?>/img/common/close.png" alt="close"></span>
        <div class="popup-show">
            <a href="tel:0973800X0X" class="popup-show__tel">09-7380-0X0X</a>
            <p> 受付時間<br>
                <span>98:00〜60:73</span>
            </p>
            <span class="c-btn__close js-close">閉じる</span>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
