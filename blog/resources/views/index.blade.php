<!DOCTYPE html>
<!-- saved from url=(0035)https://massbank.eu/MassBank/Search -->
<html lang="en" style="max-width:1050px"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>质谱库 | 数据库 | 检索</title>

	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Search of spectra by chemical name, peak, InChIKey or SPLASH.">
	<meta name="keywords" content="Search,Compound,ExactMass,Formula,InChIKey,SPLASH">
	<meta name="author" content="MassBank">
	<meta name="copyright" content="Copyright (c) 2006 MassBank Project and NORMAN Association (c) 2011">
	<link rel="stylesheet" type="text/css" href="./MassBank _ Database _ Search_files/w3.css">
	<link rel="stylesheet" type="text/css" href="./MassBank _ Database _ Search_files/w3-theme-grey.css">
	<link rel="stylesheet" type="text/css" href="./MassBank _ Database _ Search_files/massbank.css">
	<script type="text/javascript" async="" defer="" src="./MassBank _ Database _ Search_files/piwik.js"></script><script type="text/javascript" async="" defer="" src="./MassBank _ Database _ Search_files/piwik.js"></script><script type="text/javascript" async="" defer="" src="./MassBank _ Database _ Search_files/piwik.js"></script><script src="./MassBank _ Database _ Search_files/jquery-3.3.1.min.js"></script>
	<script src="./MassBank _ Database _ Search_files/massbank.js"></script>
	<script src="./MassBank _ Database _ Search_files/search.js"></script>
	<script src="./MassBank _ Database _ Search_files/svg4everybody-2.1.9.min.js"></script>
	<script src="./MassBank _ Database _ Search_files/piwik(1).js"></script>
	<script> svg4everybody();</script>
	<script src="./MassBank _ Database _ Search_files/piwik(1).js"></script>
	<noscript>
		<div class="w3-panel w3-yellow">
  			<p>Your JavaScript is disabled. To properly show MassBank please enable JavaScript and reload.</p>
  		</div>
  	</noscript>
</head>

<body class="w3-theme-gradient">
	<header class="w3-cell-row w3-text-grey">
		<div class="w3-container w3-cell w3-mobile" style="width:60%">
			<h1>
				<b>多糖结构检索数据库</b>
			</h1>
          	<h3>
				<b>博睿糖生物提供</b>
			</h3>
		</div>
		<div class="w3-container w3-cell w3-mobile w3-cell-middle w3-right-align w3-text-blue">
			<svg viewBox="0 0 32 28" style="width:16px">
				<use href="image/arrow.svg#arrow_right"></use>
			</svg>
			<!-- <a class="text w3-text-grey" href="javascript:openMassCalc();"><b>mass calculator</b></a> -->
		</div>
		<div class="w3-container w3-cell w3-mobile w3-cell-middle w3-right-align w3-text-blue">
			<svg viewBox="0 0 32 28" style="width:16px">
				<use href="image/arrow.svg#arrow_right"></use>
			</svg>
			<!-- <a class="text w3-text-grey" href="https://massbank.eu/MassBank/manuals/UserManual_en.pdf" target="_blank"><b>user manual</b></a> -->
		</div>
	</header>
	
	<div class="w3-border-bottom w3-border-dark-grey w3-padding-16" id="menu"><!-- Copyright (C) 2017 MassBank consortium -->


<div class="w3-bar" style="max-width:100%;height:auto;margin:auto;">
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="MassBank">首页</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">关键词</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">糖组成查询</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">糖苷键查询</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">红外图查询</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">NMR库查询</a>
	<a href="#" class="w3-bar-item w3-mobile w3-round w3-text-blue w3-hover-blue w3-btn" title="Search">质谱库查询</a>
	<form action="page2.htm">
		<input type="text" name="id" size="8" class="w3-bar-item w3-mobile w3-round w3-input w3-white w3-border" placeholder="关键词">
		<input type="submit" class="w3-bar-item w3-mobile w3-round w3-btn w3-input w3-blue w3-border" value="搜索">
	</form>
</div>


</div>
	
	<div style="max-width:90%;height:auto;margin:auto;">
		<h3>查询结果:</h3>
		<div class="w3-bar w3-margin-bottom" style="display:flex;flex-wrap:wrap">
			<button class="search_button w3-bar-item w3-round w3-border w3-border-red w3-light-grey" id="KeywordButton" onclick="openSearch(&#39;Keyword&#39;)" style="flex:1 1">关键字</button>
			<button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-amber w3-white" id="PeakListButton" onclick="openSearch(&#39;PeakList&#39;)" style="flex:1 1">糖组成查询</button>
			<button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-teal w3-white" id="PeakButton" onclick="openSearch(&#39;Peak&#39;)" style="flex:1 1">糖苷键查询</button>
			<button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-deep-purple w3-white" id="PeakDifferenceButton" onclick="openSearch(&#39;PeakDifference&#39;)" style="flex:1 1">红外图查询</button>
			<button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-brown w3-white" id="InChIKeyButton" onclick="openSearch(&#39;InChIKey&#39;)" style="flex:1 1">N M R 库查询</button>
            <button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-cyan w3-white" id="SplashButton" onclick="openSearch(&#39;Splash&#39;)" style="flex:1 1">质谱库查询</button>
            <button class="search_button w3-bar-item w3-round w3-border w3-bottombar w3-border-orange w3-white" id="HighButton" onclick="openSearch(&#39;High&#39;)" style="flex:1 1">高级查询</button>
		</div>

		<div id="Keyword" class="w3-animate-opacity search_keyword" style="">
            <form name="splash_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
                <div class="w3-container w3-card-4 w3-padding-small">
                    <div class="w3-cell-row w3-border">
                        <div class="w3-cell w3-mobile w3-padding-small">
                            <label><b>关键字</b></label>
                            <input class="w3-input w3-round w3-border" name="splash" type="text">
                        </div>
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
                            <input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="splash">
                <input type="hidden" name="searchType" value="splash">
                <input type="hidden" name="sortKey" value="not">
                <input type="hidden" name="sortAction" value="1">
                <input type="hidden" name="pageNo" value="1">
                <input type="hidden" name="exec" value="">
            </form>
		</div>
			
		<div id="PeakList" class="w3-animate-opacity search_keyword" style="display:none">
            <form name="inchikey_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
                <div class="w3-container w3-card-4 w3-padding-small">
                    <div class="w3-cell-row w3-border">
                        <div class="w3-cell w3-mobile w3-padding-small">
                            <label><b>糖组成查询</b></label>
                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
                            <input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="inchikey">
                <input type="hidden" name="searchType" value="inchikey">
                <input type="hidden" name="sortKey" value="not">
                <input type="hidden" name="sortAction" value="1">
                <input type="hidden" name="pageNo" value="1">
                <input type="hidden" name="exec" value="">
            </form>
		</div>
		
		<div id="Peak" class="w3-animate-opacity search_keyword" style="display:none">
            <form name="inchikey_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
                <div class="w3-container w3-card-4 w3-padding-small">
                    <div class="w3-cell-row w3-border">
                        <div class="w3-cell w3-mobile w3-padding-small">
                            <label><b>糖苷键查询</b></label>
                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
                            <input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="inchikey">
                <input type="hidden" name="searchType" value="inchikey">
                <input type="hidden" name="sortKey" value="not">
                <input type="hidden" name="sortAction" value="1">
                <input type="hidden" name="pageNo" value="1">
                <input type="hidden" name="exec" value="">
            </form>
		</div>
		
		<div id="PeakDifference" class="w3-animate-opacity search_keyword" style="display:none">
            <form name="inchikey_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
                <div class="w3-container w3-card-4 w3-padding-small">
                    <div class="w3-cell-row w3-border">
                        <div class="w3-cell w3-mobile w3-padding-small">
                            <label><b>红外图查询</b></label>
                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
                            <input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="inchikey">
                <input type="hidden" name="searchType" value="inchikey">
                <input type="hidden" name="sortKey" value="not">
                <input type="hidden" name="sortAction" value="1">
                <input type="hidden" name="pageNo" value="1">
                <input type="hidden" name="exec" value="">
            </form>
		</div>

		<div id="InChIKey" class="w3-animate-opacity search_keyword" style="display:none">
			<form name="inchikey_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
			<div class="w3-container w3-card-4 w3-padding-small">
				<div class="w3-cell-row w3-border">
					<div class="w3-cell w3-mobile w3-padding-small">
						<label><b>NMR库查询</b></label>
						<input class="w3-input w3-round w3-border" name="inchikey" type="text">
					</div>
					<div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
						<input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
					</div>
				</div>
			</div>
			<input type="hidden" name="type" value="inchikey">
			<input type="hidden" name="searchType" value="inchikey">
			<input type="hidden" name="sortKey" value="not">
			<input type="hidden" name="sortAction" value="1">
			<input type="hidden" name="pageNo" value="1">
			<input type="hidden" name="exec" value="">
			</form>
		</div>
	
		<div id="Splash" class="w3-animate-opacity search_keyword" style="display:none">
			<form name="splash_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
			<div class="w3-container w3-card-4 w3-padding-small">
				<div class="w3-cell-row w3-border">
					<div class="w3-cell w3-mobile w3-padding-small">
						<label><b>质谱库查询</b></label>
						<input class="w3-input w3-round w3-border" name="splash" type="text">
					</div>
					<div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
						<input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
					</div>
				</div>
			</div>
			<input type="hidden" name="type" value="splash">
			<input type="hidden" name="searchType" value="splash">
			<input type="hidden" name="sortKey" value="not">
			<input type="hidden" name="sortAction" value="1">
			<input type="hidden" name="pageNo" value="1">
			<input type="hidden" name="exec" value="">
			</form>
		</div>

        <div id="High" class="w3-animate-opacity search_keyword" style="display:none">

            <form name="inchikey_query" class="query" action="https://massbank.eu/MassBank/Result.jsp">
                <div class="w3-container w3-card-4 w3-padding-small">
                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>关键字</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>


                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>糖组成查询</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>


                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>糖苷键查询</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>

                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>红外图查询</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>

                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>N M R 库查询</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>

                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:15%">
                            <b>质谱库查询</b>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding-small">

                            <input class="w3-input w3-round w3-border" name="inchikey" type="text">
                        </div>
                    </div>

                    <div class="w3-cell-row ">
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:75%">

                        </div>
                        <div class="w3-cell w3-mobile w3-cell-bottom w3-padding-small" style="width:25%">
                            <input type="submit" class="w3-input w3-round w3-border w3-blue w3-btn" value="搜索" style="width:80px;float:right">
                        </div>
                    </div>



                </div>
                <input type="hidden" name="type" value="inchikey">
                <input type="hidden" name="searchType" value="inchikey">
                <input type="hidden" name="sortKey" value="not">
                <input type="hidden" name="sortAction" value="1">
                <input type="hidden" name="pageNo" value="1">
                <input type="hidden" name="exec" value="">
            </form>
        </div>
		
		<script>
		// setting the search tab from localStorage here to prevent flickering
		function openSearch(searchName) {
			$(".search_button").removeClass("w3-light-grey").addClass("w3-bottombar w3-white");
			$("#"+searchName+"Button").removeClass("w3-bottombar w3-white").addClass("w3-light-grey");
			$(".search_keyword").hide();
			$("#"+searchName).show();
			localStorage.setItem("searchName", searchName);
		}
		// get last open search tab from localStorage or load default Keyword if empty
		var searchTab = localStorage.getItem("searchName") || "Keyword";
		// show search tab
		openSearch(searchTab);
		</script>
		
		<br>
		
	</div>
  
	<br>
	<div id="copyrightline">



<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="author" content="MassBank">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta name="ROBOTS" content="NOINDEX,FOLLOW">
<link rel="stylesheet" href="./MassBank _ Database _ Search_files/03_design.css" type="text/css" media="all">
<script src="./MassBank _ Database _ Search_files/piwik(1).js"></script>
<title>MassBank | Copyright Line</title>


<!-- <span>Copyright © since 2006 MassBank Project</span>
<span>Copyright © since 2011 <a href="https://www.norman-network.net/" target="_blank">NORMAN Association</a></span>
<span>Copyright © since 2017 <a href="https://github.com/MassBank/" target="_blank">MassBank Consortium</a></span>
<span>Responsible: Dr. Tobias Schulze <a href="mailto:tobias.schulze@ufz.de">(tobias.schulze@ufz.de)</a></span> -->
<!--<span><a href="http://massbank.eu/MassBank/license.html" target="_blank">Database License Agreement</a></span>-->
<script type="text/javascript">
	e1="@massbank";
	e2="massbank";
	e3=".eu";
	email_link="mailto:"+e2+e1+e3;
</script>
<span>
<!-- <input type="button" onclick="this.onClick=window.open(email_link);" value="Feedback and Questions"></span> -->


</div>
		


</body></html>