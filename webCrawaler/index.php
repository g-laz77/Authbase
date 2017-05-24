<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Article" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Government of India Web Directory,Directory,GOI Directory,Web Directory,Directory,Government,Links,India,Feed back,Tell a Friend,Union Government,State Government,Legislature,Judiciary,International,Sectors,Sub Sectors,Districts,Directory Statistics,Central Government,Site of Day,National Portal" />
<meta name="Description" content="Union Government State Government Legislature Judiciary International" />
<title>Government of India Web Directory</title>
<link href="css/style1.css" rel="stylesheet" type="text/css"/>
<link href="css/unionnew_style.css" rel="stylesheet" type="text/css"/>
<link href="css/static_style.css" rel="stylesheet" type="text/css"/>
<link href="css/level2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/ajax-tooltip.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="javascript/validation.js"></script>
<script type="text/javascript" src="javascript/functions.js"></script>
<script type="text/javascript" src="javascript/validation_frontend.js"></script>
<script type="text/javascript" src="javascript/ajax-tooltip.js"></script>
<script type="text/javascript" src="javascript/ajax-dynamic-content.js"></script>
<script type="text/javascript" src="javascript/ajax.js"></script>
<!--<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>-->
<style type="text/css" media="screen">
                      html, body
                      {}</style></head>
<body>
<div id="wholewrapper">
<div id="maincontainer">
<div id="headercontainer">
<div class="headerRight1">
<div class="skipLink">
<a href="#maincontent" class="skipLink_text" title="Skip to main content">Skip to main content</a>
</div>
<div class="textChange">

<div class="imgGroup1">
	
	<a href="javascript:subMaxSize('/index.php','smaller');" title="Decrease text size"><img src="images/textsizeMinus.gif"  title="Decrease text size" alt="Decrease text size" class="img_head"/></a>
		
	<a href="javascript:subMaxSize('/index.php','medium');" title="Normal text size"><img src="images/textsizeNormal.gif"  title="Normal text size" alt="Normal text size" class="img_head"/></a>
		<a href="javascript:subMaxSize('/index.php','larger');" title="Increase text size"><img src="images/textsizePlus.gif" class="img_head" title="Increase text size" alt="Increase text size"/></a>
	
		
</div>
<img src="images/line.gif" alt="line" class="img_head"/>
    <div class="imgGroup2">
 
<a href="javascript:subContrast('/index.php','High');"><img src="images/texthighContrast.gif" alt="High Contrast View" /></a>
<img src="images/textNormal.gif"  alt="Standard view" />
    <span><a  class="lang" href="javascript:void(0);" title="English"><strong>English</strong></a></span>
 </div>
</div>
</div>
<div id="head_maincontainer">
<div class="head_leftcontainer"><a href="index.php"><img src="images/logo.png" title="GOI Web Directory" alt="GOI Web Directory" /></a></div>
<div class="head_rightcontainer"><img src="images/bharatindiasmall.png" title="indian flag" alt="indian flag" width="70" height="26" /></div>
<div class="head_middlecontainer"><div class="subscribe_link"><a href="stay_update.php" class="rgt_top_link" title="SUBSCRIBE">SUBSCRIBE </a></div>
					<div class="subscribe_img_link">
					<a href="subscribe_email.php"><img  src="images/subscribe_mail.jpg" title="subscribe to email" alt="subscribe to email" class="img_head"/></a><a href="rss_subscribe.php">
					<img src="images/rss.png" title="subscribe to rss feed" alt="subscribe to rss feed" class="img_head"/></a>&nbsp;</div></div>

<div class="header_img_group">
			<div class="header_midimg2">
			<div class="header_imgleft">			
			<div class="header_imgright">
			</div>
			</div>
			</div>			
		</div>

</div>
<a name="maincontent"></a>
</div><script type="text/javascript">
var arg;
		function show_categ(catid,orgname)
		{
		
		//document.getElementById('categ_id').value = catid;
		//document.getElementById('categ_name').value = orgname;
		arg="?ct="+catid;
		 
		if(catid=="E002" || catid=="E053")
		{
		document.st_index.action="union_categories.php"+arg;			
		}
		else 
		{
		document.st_index.action="union_organisation.php"+arg;
		}
		document.st_index.submit();
		}
		
		function st_details(a)
		{
		  
		  arg="?ou="+a;
		  //document.getElementById('stateid').value = a;
		  document.st_index.action="state_departments.php"+arg;
		  document.st_index.submit();
		}
		function submitCateg(catid,orgname)
		{
		document.getElementById('category').value = catid;
		document.getElementById('org_name_inte').value = orgname;
		document.st_index.action="international_categories.php";
		document.st_index.submit();
		}
		function submitSubCateg(catid,govt,orgname,countleg)
		{
		document.getElementById('category').value = catid;
		document.getElementById('govtid').value = govt;
		document.getElementById('org_name_inte').value = orgname;
		document.getElementById('countleg').value = countleg;
		document.st_index.action="international_subcategories.php";
		document.st_index.submit();
		}
		
		function submitSubCategJud(catid,govt,orgname,countleg)
		{
		document.getElementById('category').value = catid;
		document.getElementById('govtid').value = govt;
		document.getElementById('org_name_jud').value = orgname;
		document.getElementById('countleg').value = countleg;
		document.st_index.action="judiciary_category.php";
		document.st_index.submit();
		}
		function submitSubCategLeg(catid,govt,orgname,countleg)
		{
		document.getElementById('category').value = catid;
		document.getElementById('govtid').value = govt;
		document.getElementById('org_name_leg').value = orgname;
		document.getElementById('countleg').value = countleg;
		document.st_index.action="legislature_category.php";
		document.st_index.submit();
		}
		
		function submitlegis(lid)
		{
		
			//document.getElementById('legid').value = lid;
         
			arg="?ct="+lid;
			document.st_index.action="legislature_subcategory.php"+arg;
			document.st_index.submit();
		}
		function submitjud(jid)
		{
			arg="?ct="+jid;
			//document.getElementById('judid').value = jid;
			document.st_index.action="judiciary_subcategory.php"+arg;
			document.st_index.submit();
		}
		function remove_text(id) {
		
			id.value = "";			
		}
		function subfrm() {
		
			if(document.getElementById('txt_usr_email').value=='')
			{
			  alert("Please Enter your E-mail address !");
			  document.frm_stay_update.txt_usr_email.focus();
			  return false;
			}
			else if(chkmail(document.getElementById('txt_usr_email').value)==false) {
				
				document.frm_stay_update.txt_usr_email.value="";
				document.frm_stay_update.txt_usr_email.focus();		
				return false;
			}
			else {
				document.getElementById("usr_email").value=document.getElementById("txt_usr_email").value;
				document.getElementById("txt_usr_email").value="Enter E-mail";
				mywin=window.open("stay_updated.php","goidisplaywin1","left=100,width=600,height=150,screenX=100,screenY=0,scrollbars=yes,menubar=no,toolbar=no,location=no,resizable=no");				
				mywin.focus();								
				return true;
				
			}
		}
		function dispShare() {
		
			document.getElementById("example7").style.display="block";
		}
		function hideShare() {
			document.getElementById("example7").style.display="none";
		}
		function subTellaFriend_hm(url) {
			document.getElementById('tellafriend_url').value=url;
			document.getElementById('act').value="";
			document.getElementById('st_index').action="tellafriend.php";	
			document.getElementById('st_index').submit();
 	    }
</script>
<div class="header_nav">
	<div class="home_link">[ Home ]</div>
	<script type="text/javascript">
function addBookmark(title,url){
                        if(window.sidebar){
                                window.sidebar.addPanel(title, url, "");
                        } else if(document.all){
                                window.external.AddFavorite(url, title);
                        } else if(window.opera && window.print){
                                alert('Press ctrl+D to bookmark (Command+D for macs) after you click Ok');
                        } else if(window.chrome){
                                alert('Press ctrl+D to bookmark (Command+D for macs) after you click Ok');
                        }
                }
 
</script>
<meta property="og:image" content="http://goidirectory.gov.in/images/goi_webdirectory_banner1.jpg" />
<div class="rt_bkmark">
	
	<div id="bkmarkwrapper">
		<div class="wrapper" onmouseover="dispShareOrgn()" onmouseout="hideShareOrgn()">
												
					<div class="bk_mark_email">
						<div class="bkmrk_share_img"><img src="images/Share16.jpg" alt="Bookmark/Share"  /></div>
						<div class="share_bk">Bookmark/Share</div>
					</div>							
					<ul id="example8">
					<li class="aloe"><img src="images/Share16.jpg" class="bookmark_browser" alt="bookmark in your browser" title="bookmark in your browser"  />&nbsp;Bookmark/Share</li> <!-- border="0" width="16" height="16" -->

			<!--		<li class="berg"><a id="bookmarkme" href="javascript:addBookmark(location.href,document.title);" rel="sidebar" title="bookmark this page"><img src="images/favorite_icon.gif" class="bookmark_browser" alt="bookmark in your browser" title="bookmark in your browser" border="0"  />Favorites</a></li>-->
				   <li class="berg">
				  <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" title="publish on facebook"><img src="images/facebook_icon.png" class="bookmark_browser"  title="publish on facebook.com" alt="publish on facebook.com" border="0"  />Facebook</a>-->
				   <a href="https://www.facebook.com/dialog/feed?app_id=525405160893662&link=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php&name=GoI%20Web%20Directory&picture=http%3A%2F%2Fgoidirectory.gov.in%2Fimages%2Fgoi_directory_banner_share.jpg&redirect_uri=http%3A%2F%2Fgoidirectory.gov.in&description=Single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors" target="_blank" title="publish on facebook"><img src="images/facebook_icon.png" class="bookmark_browser"  title="publish on facebook.com" alt="publish on facebook.com" />Facebook</a>
				  </li>
                  <li class="elde">
					<a href="https://twitter.com/home?status=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php" target="_blank" title="publish on twitter"><img src="images/twitter_icon.png" class="bookmark_browser" title="publish on twitter" alt="publish on twitter"  />Twitter</a>
				</li>
             
                <li class="dami">
				<a href="https://plus.google.com/share?url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php" target="_blank" title="publish on google plus"><img src="images/google_plus_icon.png" class="bookmark_browser" title="publish on  google plus" alt="publish on  google plus"  />Google Plus</a>

				</li>
				  
	<li class="deli">
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php/&amp;title=GoI%20Web%20Directory&summary=A%20single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors.%20&source=" target="_blank" title="publish on LinkedIn"><img src="images/linkedin_icon.png" class="bookmark_browser"  title="publish on LinkedIn"  alt="publish on LinkedIn"  />LinkedIn</a>
				</li>
				
				
                
			<li class="stumble">

					<a href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php&amp;media=GoI%20Web%20Directory&description=A%20single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors.%20" target="_blank" title="publish on pinterest"><img src="images/pinterest_icon.png" class="bookmark_browser" alt="publish in MySpace" title="publish in pinterest"   />Pinterest</a>
				</li>			
                
                	<li class="technorati">
					<a href="http://www.tumblr.com/share/link?url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php/&amp;name=GoI%20Web%20Directory&description=A%20single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors.%20" target="_blank" title="bookmark on tumblr"><img src="images/tumblr_icon.gif" class="bookmark_browser"  title="publish on tumblr" alt="publish on tumblr"  />tumblr</a>
				</li>
                
				
		<!--second-->
				<li class="ging" style="margin-top: -12em;">
              
                        	<a href="http://www.stumbleupon.com/submit?url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php/&amp;title=GOI%20Directory" target="_blank" title="publish on Stumble Upon"><img src="images/StumbleUpon_icon.png" class="bookmark_browser" title="publish on stumbleupon" alt="publish on stumbleupon"  />Stumbleupon</a>
					</li> 
                
				<li class="hops">
									
          <a href="http://digg.com/submit?phase=2&url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php&amp;title=GOI%20Directory&amp;bodytext=Single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors&topic=software" target="_blank" title="publish on digg"><img src="images/digg_icon.png" class="bookmark_browser" title="publish on Digg" alt="publish on Digg"  />Digg</a>
				</li>
				<li class="iris">
                <a href="https://delicious.com/save?v=5&noui&jump=close&url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php/&amp;title=GOI%20Directory" target="_blank" title="bookmark on delicious"><img src="images/delicious_icon.jpg" class="bookmark_browser"  title="publish on Delicious" alt="publish on Delicious"  />Delicious</a>
				
				</li>	
                			
		<li class="reddit">
				<a href="http://www.reddit.com/submit?url=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php/&amp;title=GOI%20Directory" target="_blank" title="publish on reddit"><img src="images/reddit_icon.png" class="bookmark_browser" title="publish in reddit" alt="publish in reddit"  />Reddit</a>
				</li>
                
				<li class="mixx">
				<a href="http://blogger.com/blog-this.g?t=Single%20point%20source%20to%20know%20all%20about%20Indian%20Government%20Websites%20at%20all%20levels%20and%20from%20all%20sectors&n=GoI%20Web%20Directory&u=http%3A%2F%2Fgoidirectory.gov.in%2Findex.php" target="_blank" title="publish on blogger"><img src="images/blogger_icon.jpg" class="bookmark_browser" alt="publish on blogger" title="publish on blogger"  />Blogger</a>
				</li>
				
	
				
				<li class="sphinn">
				<a href="rss_subscribe.php" title="RSS / XML Feed"><img src="images/xml_icon.png" class="bookmark_browser" title=" XML Feed" alt="XML Feed"  />RSS / XML Feed</a>
				</li>
				
				
				</ul>
</div>
<div  class="img_email">
<a href="javascript:subTellaFriend('aHR0cDovL2dvaWRpcmVjdG9yeS5nb3YuaW4vaW5kZXgucGhw');"><img  src="images/email.jpg" title="Tell a Friend" alt="Tell a Friend" class="bookmark_browser"  /></a></div>

<div  class="txt_email">

<input type="hidden" name="tellafriend_url" id="tellafriend_url"  />
<a class="bkmark_link" href="javascript:subTellaFriend('aHR0cDovL2dvaWRpcmVjdG9yeS5nb3YuaW4vaW5kZXgucGhw');" title="Tell a Friend">Email</a>
</div>						
<div  class="print_img">
<a href="javascript:view_print_page_ajax();" title="view print page"><img src="images/print_icon6.jpg" class="bookmark_browser" title="Print Page" alt="Print Page"  /></a>
</div>
<div  class="print_text">
<a class="bkmark_link" href="javascript:view_print_page_ajax();" title="Print">Print</a>
</div>
<div  class="suggest_img">
<a href="javascript:subSuggestasite();" title="submit suggest"> <img src="images/suggest.jpg" class="bookmark_browser" title="Suggest" alt="Suggest" /></a>
</div>
<div  class="suggest_text">
<a class="bkmark_link" href="javascript:subSuggestasite();" title="Suggest a Site">Suggest a Site</a>

</div>
</div>
	
	</div></div>
<div class="dispaly_dotimg"><!-- --></div>
<form name='st_index' id="st_index" method="post" action="">
<input type="hidden" name="stateid" id="stateid" value=""  />
<input type="hidden" name="category" id="category" value="title" />
<input type="hidden" name="govtid" id="govtid" value="" />
<input type="hidden" name="countleg" id="countleg" value="" />
<input type="hidden" name="org_name_leg" id="org_name_leg" value="" />
<input type="hidden" name="org_name_inte" id="org_name_inte" value="" />
<input type="hidden" name="org_name_jud" id="org_name_jud" value="" />
<input type="hidden" name="search_id" id="search_id" value="bothGov"/>
<input type="hidden" name="form_id" id="form_id" value="st_index"/>
<input type="hidden" name="categ_id" id="categ_id" value="st_index"/>
<input type="hidden" name="formname1" id="formname1" value="st_index"/>
<input type="hidden" name="categ_name" id="categ_name"/>
<input type="hidden" name="act" id="act"/>
<input type="hidden" name="legid" id="legid" value="" />
<input type="hidden" name="judid" id="judid" value="" />
<input type="hidden" name="scope" id="scope" value="" />
<div id="midcontainer">
  <div id="leftcontainer">
	<input type="hidden" name="textsize1" id="textsize1" />
	<input type="hidden" name="contrastscheme1" id="contrastscheme1" />
    <div id="mainlinks">
      <ul>
        <li><a href="union_index.php" title="Union Government">Union Government</a></li>
        <li><a href="state.php" title="States & UTs">States &amp; UTs</a></li>
        <li><a href="district.php" title="Districts">Districts</a></li>
        <li><a href="legislature_index.php" title="Legislature">Legislature</a></li>
        <li><a href="judiciary_index.php" title="Judiciary">Judiciary</a></li>
		 <li><a href="international_index.php" title="International">International</a></li>
      </ul>
    </div>   
    <div class="h3">Sectors</div>
    <div class="innercontainerlastupdate">
      <ul>
        <li><a href="javascript:show_categ_sectors('ST001');" title="Agriculture" >Agriculture</a></li>
        <li><a href="javascript:show_categ_sectors('ST010');" title="Education">Education</a></li>
        <li><a href="javascript:show_categ_sectors('ST009');" title="Industry">Industry</a></li>
        <li class="more"><a href="sector_index.php" class="more" title="More...">More...</a></li>
      </ul>
    </div>

<div class="indiaimage">
<a href="javascript:openChild('sitecounter.php?id=3341','win2');" title="National Portal of India" ><img src="images/banner.jpg"  class="main_right_border"  alt="National Portal of India" title="National Portal of India" /></a>
</div>

<!--
<div class="indiaimage">
<a href="javascript:openChild('sitecounter.php?id=14031','win2');" title="Digital India Awards 2016"><img src="images/webratna.jpg"  class="main_right_border"  alt="Digital India Awards 2016" title="Digital India Awards 2016" /></a>
</div>-->

  </div>  <div id="middlecontainer">
  	<div class="directory_text"><span class="ver_or_10">GOI Web Directory</span>  - A one-point source to access all Indian Government Websites at all levels and from all sectors. We welcome your participation in enhancing the Directory further and also invite your comments and suggestions for improvement</div>
	
	    <div class="innercontainerleft">
	<div class="dispaly_dotimgindex"><!----></div>
    <h2><a href="union_index.php" title="Union Government">Union Government</a></h2>
    <ul>
    					
		<li><a   href="javascript:openChild('http://goidirectory.gov.in/sitecounter.php?id=333','win2');"  title="http://presidentofindia.gov.in - External site that opens in a new window">President of India</a>
							</li>
											
						
						
                      					
		<li><a   href="javascript:openChild('http://goidirectory.gov.in/sitecounter.php?id=3652','win2');"  title="http://vicepresidentofindia.nic.in - External site that opens in a new window">Vice President of India</a>
							</li>
											
						
						
                      					
		<li><a   href="javascript:openChild('http://goidirectory.gov.in/sitecounter.php?id=252','win2');"  title="http://pmindia.gov.in - External site that opens in a new window">Prime Minister&#039;s Office</a>
							</li>
											
						
						
                          
			<li><a href="javascript:show_categ('E002','Ministries');" title="Ministries">Ministries</a></li>
			<li><a href="javascript:show_categ('E003','Departments');" title="Departments">Departments</a></li>
			<li><a href="javascript:show_categ('E007','Autonomous%20Bodies');" title="Autonomous Bodies">Autonomous Bodies</a></li>
        <li class="more"><a href="union_index.php" class="more" title="More...">More...</a></li>
      </ul><br />
	  <div class="dispaly_dotimgindex"><!----></div>
      <h2><a href="legislature_index.php" title="Legislature">Legislature </a></h2>
	         <ul>
          
	<li><a href="javascript:submitlegis('L001');" title="Parliament of India">Parliament of India</a></li>
			  
	<li><a href="javascript:submitlegis('L002');" title="Rajya Sabha">Rajya Sabha</a></li>
			  
	<li><a href="javascript:submitlegis('L003');" title="Lok Sabha">Lok Sabha</a></li>
			  
	<li><a href="javascript:submitlegis('L004');" title="State Legislative Assemblies">State Legislative Assemblies</a></li>
			  
	<li><a href="javascript:submitlegis('L005');" title="State Legislative Councils">State Legislative Councils</a></li>
			  
	<li><a href="javascript:submitlegis('L006');" title="Others(Legislative)">Others(Legislative)</a></li>
			  
        <li class="more"><a href="legislature_index.php" class="more" title="More...">More...</a></li>
      </ul>
	  <div class="dispaly_dotimgindex"><!----></div>
    </div>
    <div class="innercontainerright">
	<div class="dispaly_dotimgindex"><!----></div>
      <h2><a href="state.php" title="States & UTs">States &amp; UTs </a></h2>
	        <ul>
        		  <li><a   href="javascript:st_details('AN');" title="Andaman and Nicobar Island (UT)">Andaman and Nicobar Island (UT)</a></li>
				  <li><a   href="javascript:st_details('AP');" title="Andhra Pradesh">Andhra Pradesh</a></li>
				  <li><a   href="javascript:st_details('AR');" title="Arunachal Pradesh">Arunachal Pradesh</a></li>
				  <li><a   href="javascript:st_details('AS');" title="Assam">Assam</a></li>
				  <li><a   href="javascript:st_details('BR');" title="Bihar">Bihar</a></li>
				  <li><a   href="javascript:st_details('CH');" title="Chandigarh (UT)">Chandigarh (UT)</a></li>
		 
        <li class="more"><a href="state.php" class="more" title="More...">More...</a></li>
      </ul><br />
      <div class="dispaly_dotimgindex"><!----></div>
      <h2><a href="judiciary_index.php" title="Judiciary">Judiciary</a></h2>
	         <ul>
                             
		 
		 <li><a  href="javascript:submitjud('J001');" title="Supreme Court of India">Supreme Court of India</a></li>
		 
	  
	                          
		 
		 <li><a  href="javascript:submitjud('J002');" title="High Courts">High Courts</a></li>
		 
	  
	                          
		 
		 <li><a  href="javascript:submitjud('J003');" title="District Courts">District Courts</a></li>
		 
	  
	                          
		 
		 <li><a  href="javascript:submitjud('J009');" title="Consumer Courts">Consumer Courts</a></li>
		 
	  
	                          
		 
		 <li><a  href="javascript:submitjud('J011');" title="Tribunals/Boards">Tribunals/Boards</a></li>
		 
	  
	                          
		 
		 <li><a  href="javascript:submitjud('J013');" title="Rights Commission">Rights Commission</a></li>
		 
	  
	           <li class="more"><a href="judiciary_index.php" class="more" title="More...">More...</a></li>
      </ul>
	  <div class="dispaly_dotimgindex"><!----></div>
    </div>
  </div> 
  
  <div id="rightcontainer">
  
  	<div class="searchcontainer">
		<div class="search_text"><label for="search_text">Search</label></div>
		<div class="search_controls">
		<input name="search_text" type="text" class="sindex_txt" id="search_text" onkeypress="return checkEnter(event)" autocomplete="OFF"/>
         <input name="go" type="submit"   value="Go"  onclick="return searchSubmit();"/> 
		</div>
		<div class="searchtip_link">		
		<ul>
			<li class="first"><a href="advanced_search.php" title="Advanced search">Advanced search</a></li>
			<li><a href="search_tips.php" title="Search Tips">Search Tips</a></li>
		</ul>
		</div>
	</div>	<div class="subrightcontainer">
	<div class="sow_outer">
		<div class="sow_container">
		 <div class="sow_mainhead">Site of the Week</div>
		 
		 <div class="sow_img"><a href="javascript:openChild('sitecounter.php?id=12711','win2');">
		 
          <img src="http://goidirectory.gov.in/sow_images/thumb/12711_small_greentribunal.png" alt="National Green Tribunal" title="National Green Tribunal" class="site_thumb" /></div>
		  </a>
		  <div class="sow_head">National Green Tribunal</div>
		 <div class="sow_desc">The National Green Tribunal has been established under the National Green Tribunal Act 2010 for effective and expeditious disposal of cases relating to environmental protection and conservation of forests and other natural resources including enforcement of any legal right relating to environment and giving relief and compensation for damages to persons and property and for matters connected therewith or incidental thereto.<br /><a class="more" href="sod_review.php" title="More..">More.. </a></div>
		 
		</div>
		</div>
		<div class="sow_space"></div>
		<script type="text/javascript">
var FormID;

function subCategoriesrt(catid,catname) {
FormID=document.getElementById("formname").value;
		
	document.getElementById('categ_id').value = catid;
	document.getElementById('categ_name').value = catname;
	document.getElementById('act').value ='getCategory';
	url="state_category.php";
	url+="?ou="+"";
	url+="&amp;ct="+catid;
	//document.getElementById('categ_id').value="";
	//document.getElementById('stateid').value="";
	document.getElementById(FormID).action=url;
	//document.getElementById(FormID).action="state_category.php";	
	document.getElementById(FormID).submit();
}
function show_categrt(catid,catname)
{
	FormID=document.getElementById("formname").value;
	
	document.getElementById('categ_id').value = catid;
	document.getElementById('categ_name').value = catname;
	document.getElementById('parent_id').value="";	
	document.getElementById('mainCateg').value="";
	//alert(document.getElementById('mainCateg').value);
	url+="statedept_categories.php";
	url+="&amp;ct="+catid;
	url+="?ou="+"";	
	document.getElementById(FormID).action="statedept_categories.php";			
	//alert(url);
	document.getElementById(FormID).action=url;	
	document.getElementById(FormID).submit();
	
}

function view_print_page()
{
	
	var url = location.href;
	var lastSlash = url.lastIndexOf("/");
	var firstQuestionMark = url.indexOf("?");
	if(firstQuestionMark == -1)
	{
	firstQuestionMark = url.length;
	}
	
	var fileName = url.substring(lastSlash + 1, firstQuestionMark);
	var params = url.substring(firstQuestionMark,  url.length);
	var formurl = "print/"+fileName+params;
	FormID=document.getElementById("formname1").value;	
	document.getElementById(FormID).action= formurl;	
	document.getElementById(FormID).submit();
	
}
function show_categ2rt(catid,catname,parentID,parentName) {

	FormID=document.getElementById("formname").value;	
	
	if(catid=="E042") {
		
		url="state_districts.php";	
	}
	else {
		
		url="statedept_categories.php";
	}
	document.getElementById('stateid').value="";
	document.getElementById('categ_id').value="";
	url+="?ou="+"";
	url+="&amp;ct="+catid;
	//alert(url);
	document.getElementById(FormID).action=url;	
	document.getElementById(FormID).submit();

}
function subOtherCategrt(parentID,catname) {
	

	FormID=document.getElementById("formname").value;	
	url="statedept_categories.php";
	url+="?ou="+"";
	url+="&amp;ct="+parentID;	
	
	document.getElementById('stateid').value="";
	document.getElementById('categ_id').value="";
	document.getElementById('mainCateg').value = "";
	document.getElementById('mainCategName').value = "";
	document.getElementById(FormID).action=url;	
	document.getElementById(FormID).submit();	
}

function subUnionGovtSg(parentID) {
	

	FormID=document.getElementById("formname").value;	
	url="state_other_categories.php";
	url+="?ou="+"";
	url+="&amp;ct="+parentID;	
	
	document.getElementById('stateid').value="";
	document.getElementById('categ_id').value="";
	document.getElementById('mainCateg').value = "";
	document.getElementById('mainCategName').value = "";
	document.getElementById(FormID).action=url;	
	document.getElementById(FormID).submit();	
	
}

function show_categ_depts(catid,catname)
{
	FormID=document.getElementById("formname").value;	
	url="state_depts.php";
	url+="?ou="+"";
	url+="&amp;ct="+catid;
	document.getElementById('stateid').value="";
	document.getElementById('categ_id').value="";
	document.getElementById(FormID).action=url;	
	document.getElementById(FormID).submit();
}

function subPanchCategrt(parentID,catname) {
		
	
	url="panchyats.php";
	url+="?ou="+"";
	url+="&amp;ct="+parentID;
	document.getElementById('stateid').value="";
	document.getElementById('categ_id').value="";
	document.union.action=url;
	document.union.submit();
}
function showStRtCategories(catid,catname,group_id)	{
		
		
		document.getElementById('group_id').value = group_id;		
		url="state_orgn_categories.php";
		url+="?ou="+"";
		url+="&amp;ct="+catid;
		
		document.getElementById('stateid').value="";
		document.getElementById('categ_id').value="";
		document.union.action=url;	
		document.union.submit();
		
}
function subStRtPanchCateg(categid,catname,group_id) {
		
			document.getElementById('categ_id').value = categid;
			document.getElementById('categ_name').value = catname;
			document.getElementById('group_id').value = group_id;
			document.getElementById('stateid').value="";
			//alert(categid);
			document.union.action="state_orgn_categories.php#group"+categid;
			document.union.submit();
		}

function showPageMinsub(id,name)
		{
				document.getElementById('minid').value = id;
				document.getElementById('minname').value = name;
				//document.union.action="ministries_departments.php";
				document.union.action="ministries_index.php";
				document.union.submit();
		}
function subTellaFriend(url) {

FormID=document.getElementById("formname1").value;
document.getElementById('tellafriend_url').value=url;
//document.getElementById('act').value="";
document.getElementById(FormID).action="tellafriend.php";	
document.getElementById(FormID).submit();

}

function subSuggestasite() {
FormID=document.getElementById("formname1").value;
document.getElementById(FormID).action="suggestasite.php";	
document.getElementById(FormID).submit();
}
</script>
<div class="newadd">
<input type="hidden" name="orgnsation_name" id="orgnsation_name" />
<input type="hidden" name="perform_action" id="perform_action" />
		
		<div class="participate_link"><a href="participate.php" class="ver_white_big" title="Participate">Participate</a></div>
				
			<div class="innercontainerleft1">
			 <h3>New Additions</h3>
								
			  <ul>
			  						<li><a href="javascript:openChild('sitecounter.php?id=14269','win2');" class="grey_12" title="http://jammutourism.gov.in - External site that opens in a new window">
							Directorate of Tourism, Jammu, Governmen...							</a>
							</li> 
										<li><a href="javascript:openChild('sitecounter.php?id=14268','win2');" class="grey_12" title="https://incometaxrajasthan.gov.in - External site that opens in a new window">
							Income Tax Department, Rajasthan							</a>
							</li> 
										<li><a href="javascript:openChild('sitecounter.php?id=14267','win2');" class="grey_12" title="http://dashboard-padmaawards.gov.in - External site that opens in a new window">
							Padma Awards Dashboard							</a>
							</li> 
										<li><a href="javascript:openChild('sitecounter.php?id=14266','win2');" class="grey_12" title="http://grip.gov.in - External site that opens in a new window">
							GRameen Internal audit Portal (GRIP), Mi...							</a>
							</li> 
							
						<li class="more">
								<span style="display:block;float:left">
								 
							  	<a href="new_revisied_index.php" class="index_more" title="More..">More..</a>
								
								</span>
								<span style="text-align:right;float:right">
								<a href="http://goidirectory.gov.in/category_rss.php"><img src="http://goidirectory.gov.in/rss/rss_icon.gif" alt="RSS" title="RSS" border="0"/></a>
								</span>	
								&nbsp;			
						</li>
											
											
			  </ul>		
			  	  			
			  				</div>
				
	   	
	
			<div class="innercontainerlastupdate">
      		<div class="ver_orlast_updt">Last Updated</div>
                                      <div class="ver_grlast_updt">
									  May 24, 2017</div>
    		</div>

<div class="indiaimage" style="display:none;"><br />
<a href="javascript:openChild('sitecounter.php?id=11914','win2');" title="Prime Minister's National Relief Fund: Donate Online"><img src="images/pmrelieffund2012.jpg" class="main_right_border"  alt="Prime Minister's National Relief Fund: Donate Online" title="Prime Minister's National Relief Fund: Donate Online" /></a>
</div>

<div class="indiaimage" style="display:none;"><br />
<a href="javascript:openChild('sitecounter.php?id=12316','win2');" title="Uttarakhand Disaster Management and Relief Measures"><img src="images/rescue_uk.jpg"  class="main_right_border"  alt="Uttarakhand Disaster Management and Relief Measures" title="Uttarakhand Disaster Management and Relief Measures"/></a>
</div>
<div class="indiaimage">
<a href="javascript:openChild('sitecounter.php?id=12617','win2');" title="MyGov - Good Governance With Your Partnership"><img src="images/mygov_banner.JPG"  class="main_right_border"  alt="MyGov - Good Governance With Your Partnership" title="MyGov - Good Governance With Your Partnership" /></a>
</div>
<div class="indiaimage">
<a href="javascript:openChild('sitecounter.php?id=12010','win2');" title="Data Portal India"><img src="images/data_gov.jpg"  class="main_right_border"  alt="Data Portal India" title="Data Portal India" /></a>
</div>
<div class="indiaimage" style="display:none;"><br />
<a href="javascript:openChild('sitecounter.php?id=11356','win2');" title="Data Portal India"><img src="images/webratna14.jpg" class="main_right_border"  alt="Web Ratna Awards 2014" title="Web Ratna Awards 2014" /></a>
</div>
</div>	</div>
  
  </div>
 </div> 
 </form>
 <div class="bgstipes_footer" style="background-image:none; height:25px;"><!-- --></div>
<div id="footercontainer">
  
	<div class="footer_img_group">		
			<div class="footer_midimg2">
			<div class="footer_imgleft">			
			<div class="footer_imgright">
			</div>
			</div>
			
			
		</div>
	<div class="footer_link_group">
		<div class="link_grp_footer">
		<ul>
			<li class="first"><a href="aboutus.php" title="About the Directory">About the Directory</a></li>
            <li><a href="help.php" title="Help">Help</a></li>
			<li><a href="sitemap.php" title="Sitemap">Sitemap</a></li>
			<!-- <li><a href="newsletter/oct2014/oct2014.html" title="Newsletter">Newsletter</a></li> -->
            <li><a href="disclaimer.php" title="Disclaimer">Disclaimer</a></li>
             <li><a href="terms_and_conditions.php" title="Terms & Conditions">Terms & Conditions</a></li>
             <li><a href="website_policies.php" title="Website Policies">Website Policies</a></li>
		<!---	<li><a href="hyperlinking.php" title="Hyperlinking Policy">Hyperlinking Policy</a></li> -->
			<!--<li><a href="termsofuse.php" title="Terms of use">Terms of use</a></li> -->
			
			<li><a href="accessibilitystatement.php" title="Accessibility Statement">Accessibility Statement</a></li>
			<li><a href="feedback_statement.php" title="Feedback">Feedback</a></li>	
			<li><a href="contactus.php" title="Contact Us">Contact Us</a></li>	
		</ul>
		</div>
		<!--<div class="nic_footer">Brought to you by National Informatics Centre</div>-->
	</div>
    
    
    
    <div class="footer_link_group new_footer">

		<div class="link_grp_footer">
          
		<ul>
        <li  class="nic_footer first" style="float:none; padding-right:4px"></li>
			<li class="copy_right first" >@ Content updated and maintained by National Informatics Centre (NIC), Ministry of Electronics & Information Technology, Government of India.</li>
            
		</ul>
		</div>
<!--		<div class="nic_footer">Brought to you by National Informatics Centre</div>
-->	</div>
  </div>
  
</div>
</div>
<div id="access-keys">
        <!-- Access key definitions	-->
        <a href="index.php" accesskey="1" title="index"></a>
        <a href="javascript:searchSubmit();" accesskey="4" title="search"></a> 
		<a href="help.php" accesskey="6" title="help"></a>
        <a href="sitemap.php" accesskey="7" title="sitemap"></a> 
        <a href="website_policies.php" accesskey="8" title="Website Policies"></a> 
		<a href="feedback.php" accesskey="9" title="feedback"></a>
         </div>
</div>
</body>
</html>	