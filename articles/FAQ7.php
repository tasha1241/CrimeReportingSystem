
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
  <title>Welcome to the Crime Reporting System</title>
  <?php //include("facebox.php"); ?>
  <script type="text/javascript" src="../files/mootools.js"></script>
  <script type="text/javascript" src="../files/caption.js"></script>
<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="../css/message.css" media="all">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="../javascript/validation.js"></script>
<?php /*<script type="text/javascript" src="files/contact.jsp"></script> 
 */?>
<link rel="stylesheet" href="../files/template.css" type="text/css">
<link rel="stylesheet" href="../files/constant.css" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style4 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>

<body id="body">

   <div class="main">
   <!--header-->
   <div class="row-logo clear">
     <div class="fright">
       <div class="module-search">
         <form action="../index.php" method="post">
           <div class="search">
             <div class="search-input">
               <input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" 
				class="inputbox" size="20" value="search..." onblur="if(this.value=='') 
				this.value='search...';" onfocus="if(this.value=='search...') 
				this.value='';" type="text" />
             </div>
             <div class="search-button"> </div>
           </div>
           <input name="task2" value="search" type="hidden" />
           <input name="option2" value="com_search" type="hidden" />
         </form>
       </div>
     </div>
     <div class="fleft">
       <h1 id="logo"> <a href="" title="business"><img src="../images/crimesolutions_logo1.jpg" 
	                   alt="logo" width="251" height="95" title="business" /></a> </h1>
     </div>
   </div>
   <div class="header-box clear">		
	 <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="881" height="276">
       <param name="src" value="../files/flashbanner.swf" />
       <embed src="../files/flashbanner.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="881" height="276"></embed>
     </object>
	</div>
          
	<div class="row-top-menu wrapper-top-menu clear">
	<div class="border-top">
	<div class="border-bottom">
	<div class="border-left">
	<div class="border-right">
	<div class="corner-top-left">
	<div class="corner-top-right">
	<div class="corner-bottom-left">
	<div class="corner-bottom-right clear">
	<div class="module">
        <ul class="menu-nav">
		<li class="item54"><a href=""><span>Search</span></a></li>
		<li class="item55"><a href=""><span>Crime Alert </span></a></li>
		<li class="item56"><a href=""><span>Register crime </span></a></li>
		<li class="item57"><a href="../viewmissing_citizen.php"><span>Services</span></a></li>
		<li class="item58"><a href="../econtact.php"><span>Contacts</span></a></li>
		<li class="item53"><a href="../aboutus.php"><span>About Us</span></a></li>
		</ul>
        </div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	  </div>
	  </div>
	 </div>
		
	<!--content-->
    <div id="content">
      <div class="clear">
        <!--right-->
            <div id="right">
              <div class="right-indent"><div class="clear">
                 <div class="wrapper-box module-login">
                 <div class="border-top">
     	         <div class="border-bottom">
        	     <div class="border-left">
            	 <div class="border-right">
                 <div class="corner-top-left">
                 <div class="corner-top-right">
                 <div class="corner-bottom-left">
                 <div class="corner-bottom-right clear">
                 <div class="wrapper-box-indent">
			     <div class="box-title">
                 <div class="border1-top">
                 <div class="border1-bottom">
                 <div class="border1-left">
                 <div class="border1-right">
                 <div class="corner1-top-left">
                 <div class="corner1-top-right">
                 <div class="corner1-bottom-left">
                 <div class="corner1-bottom-right clear">
                                                                        
	          <h3>Login form</h3>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
                                                                        
                                                                              
       <div class="main-box">
       <div class="clear">
	   <form action="../checkLogin.php" method="post" name="login" class="form-login">
             <label for="mod_login_username"> Username </label>
             <input name="username" id="username" class="inputbox" alt="username" type="text">
	         <script type="text/javascript">
				 var f1 = new LiveValidation('username');
				 f1.add(Validate.Presence,{failureMessage: " Please enter username"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows                     only characters"});
				 f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid                 username"});
	         </script>
             <label for="mod_login_password"> Password </label>
             <input id="password" name="password" class="inputbox" alt="password" 
			        type="password">
             <script type="text/javascript">
				 var f1 = new LiveValidation('password');
				 f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows only characters"});
				 //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid password"});
	         </script>
	         <div class="indent-button">
             <input name="Submit" class="button png" value="Log in" type="submit">
	         </div>   
             <div class="logform-indent">
             <p> <a href=""> Forgot your password?</a> </p>
             <p> <a href=""> Forgot your username?</a> </p>
             </div>
     
             <p class="form-indent1"> No Account Yet? <a href="../registration.php"> Create an account</a> </p>
             <input name="option" value="com_user" type="hidden">
             <input name="task" value="login" type="hidden">
             <input name="return" value="L2pvb21sYV8yNTQ2Ni8jY29udGVudA==" type="hidden">
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>

    <div class="wrapper-box module s2">
    <div class="border-top">
    <div class="border-bottom">
    <div class="border-left">
    <div class="border-right">
    <div class="corner-top-left">
    <div class="corner-top-right">
    <div class="corner-bottom-left">
    <div class="corner-bottom-right clear">
    <div class="wrapper-box-indent">
	<div class="box-title">
    <div class="border1-top">
    <div class="border1-bottom">
    <div class="border1-left">
    <div class="border1-right">
    <div class="corner1-top-left">
    <div class="corner1-top-right">
    <div class="corner1-bottom-left">
    <div class="corner1-bottom-right clear">
                                                                        
	<h3>Newsflash</h3>
     
    </div>
	</div>
	</div>
	</div>
	</div>
	</div>
    </div>
    </div>
    </div>
								
    <div class="main-box">
    <div class="clear">


    <table class="contentpaneopen s2">
	<tbody>
	 <tr><td valign="top"><span class="text1">Here you can read more articles about different crimes                                             happened over the World.</span></td>
	 </tr>
	 <tr><td valign="top"></td></tr>
    </tbody></table>
    </div>
    </div>
    </div>
    </div>
    </div>
	</div>
	</div>
	</div>
    </div>
    </div>
    </div>
    </div>
    </div>
	</div>
    </div>
    
	<!--left-->
    <div id="left">
    <div class="left-indent"><div class="clear">
    <div class="wrapper-box module_menu">
    <div class="border-top">
    <div class="border-bottom">
    <div class="border-left">
	<div class="border-right">
	<div class="corner-top-left">
	<div class="corner-top-right">
	<div class="corner-bottom-left">
	<div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
    <div class="box-title">
    <div class="border1-top">
    <div class="border1-bottom">
    <div class="border1-left">
    <div class="border1-right">
    <div class="corner1-top-left">
    <div class="corner1-top-right">
    <div class="corner1-bottom-left">
    <div class="corner1-bottom-right clear">
                                                                        
	<h3>Main menu</h3>
     
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
                                                                        
    <div class="main-box">
    <div class="clear">
	<ul class="menu">
	                 <li id="current" class="active item1">	<a href=""><span>Home</span></a></li>
	                 <li class="item2"><a href=""><span>Get Crime Alert </span></a></li>
					 <li class="item59"><a href="">Register Your crime</a></li>
					 <li class="item60"><a href="">Police Station </a></li>
					 <li class="item61"><a href=""><span>Contact Us</span></a></li>
					 <li class="item62"><a href=""><span>Search</span></a></li>
					 <li class="item63"><a href="../tempflash.php"><span>What's New? </span></a></li>
	</ul>
	</div>
    </div>
    </div>
    </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
    </div>

	<div class="wrapper-box module s1">
	<div class="border-top">
	<div class="border-bottom">
	<div class="border-left">
	<div class="border-right">
	<div class="corner-top-left">
	<div class="corner-top-right">
	<div class="corner-bottom-left">
	<div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
	<div class="box-title">
    <div class="border1-top">
	<div class="border1-bottom">
	<div class="border1-left">
	<div class="border1-right">
	<div class="corner1-top-left">
	<div class="corner1-top-right">
	<div class="corner1-bottom-left">
	<div class="corner1-bottom-right clear">
	
	<h3>Popular</h3>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="main-box">
	<div class="clear">
	  <ul class="mostread s1">
	    <li class="mostread s1"><a href="" class="mostread s1">Emergancy Contact Numbers</a></li>
	    <li class="mostread s1"><a href="" class="mostread s1">crime Registration Guidelines</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1"> Where should I report a crime? </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What is Section 144 ?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">For Recruitement </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in faulty Investigation?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in Police Harassement?</a></li>
		</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div id="container" class="wrapper-container">
    <div class="corner-top-left">
    <div class="corner-top-right">
    <div class="corner-bottom-left">
    <div class="corner-bottom-right">
    <div class="clear">
    
	<table class="blog" cellpadding="0" cellspacing="0">
	<tbody>	
	<tr><td valign="top">
	<div>
	<div class="wrapper-title">
	<div class="bull-title "></div>
	</div>
	
	
	<div class="article-indent">
	<table width="100%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="4" height="23" align="left" valign="middle" class="rowBorder">&nbsp;<strong>&nbsp;&nbsp;&nbsp;</strong>	  <h1><strong>What to do in Police harassment ?.... </strong></h1></td>
</tr>
<div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
<tr>
  <td height="20" colspan="4"></td>
</tr>
<tr>
	<td height="20" colspan="4" valign="middle"><ul>
	  <li>
	    <p>The matter should be brought to the notice of senior police officers through complaint cell DPO office, assistance from District Public Safety Commission and Judiciary can also be sought by moving an application in the concerned forum.</p>
	  </li>
	  </ul></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td>&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td height="54">&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
  <td height="40">&nbsp;</td>
  <td colspan="2" class="formField">&nbsp;</td>
  <td>&nbsp;</td>
<tr>
	<td width="4%">&nbsp;</td>
	<td colspan="2" class="formField"><p> 
      
        </p>	  </td>
	<td width="28%">
	<font color="#FF0000">	
	<div id="message"></div></font>	</td>
<tr>
		<td height="5" colspan="4"></td>
	</tr>
	<tr>
		<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;</td>
	  	<td width="13%"></td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr><td height="5" colspan="4"></td></tr>
</table>
	</div>
	<div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
	</div>	
	</td>
	</tr>
	
	<tr>
	<td valign="top">&nbsp;</td>
	</tr>
	
	</tbody></table>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

      </div>
    </div>
    <!--footer-->
    <div class="footer clear">
    	<span>Crime Reporting of kenya &copy; 2016  |  <a href="#">Privacy Policy</a></span>Crime Reporting is for registering crimes any time and any where in Kenya released under HCL Info System.. </div>
</div>
<!--osc3.template-help.com -->


</body></html>