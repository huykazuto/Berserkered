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
    $delay = $loai;
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
