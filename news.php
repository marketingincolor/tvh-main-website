<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( 'gtm_head.php' ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>News about The Villages Health</title>
<link href="tvh.css" rel="stylesheet" type="text/css" />
<link href="panels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">


var scrolltotop={
    //startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
	//scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
	setting: {startline:200, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
	controlHTML: '<img src="images/arrow.png" style="filter:alpha(opacity=70); -moz-opacity:0.7;"/>', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
	controlattrs: {offsetx:120, offsety:80}, //offset of control relative to right/ bottom of window corner
	anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

	state: {isvisible:false, shouldvisible:false},

	scrollup:function(){
		if (!this.cssfixedsupport) //if control is positioned using JavaScript
			this.$control.css({opacity:0}) //hide control immediately after clicking it
		var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
		if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
			dest=jQuery('#'+dest).offset().top
		else
			dest=0
		this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
	},

	keepfixed:function(){
		var $window=jQuery(window)
		var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
		var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
		this.$control.css({left:controlx+'px', top:controly+'px'})
	},

	togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop()
		if (!this.cssfixedsupport)
			this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
		if (this.state.shouldvisible && !this.state.isvisible){
			this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
			this.state.isvisible=true
		}
		else if (this.state.shouldvisible==false && this.state.isvisible){
			this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
			this.state.isvisible=false
		}
	},
	
	init:function(){
		jQuery(document).ready(function($){
			var mainobj=scrolltotop
			var iebrws=document.all
			mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
			mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
			mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
				.css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
				.attr({title:'back to top'})
				.click(function(){mainobj.scrollup(); return false})
				.appendTo('body')
			if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
				mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
			mainobj.togglecontrol()
			$('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
				mainobj.scrollup()
				return false
			})
			$(window).bind('scroll resize', function(e){
				mainobj.togglecontrol()
			})
		})
	}
}

scrolltotop.init()</script>


<script type="text/javascript" src="utils.js"></script>
</head>

<body>
<?php include( 'gtm_body.php' ); ?>
<?php include 'nav.php'; ?>
<?php include 'includes/news-articles.php'; ?>
<div id="homewrapper">
<div id="content">

  
 <h1 style="font-family: 'AirFactoryLight'; text-transform:uppercase;">Latest News</h1>

 <?php 
  $thisYear = date('Y');
  for ($i=0; $i<count($articles); $i++) {
    if (date('Y',strtotime($articles[$i]["ArticleDate"])) == $thisYear) {
      ?>
       <p class="text"><span class="bolds"><?php echo $articles[$i]["ShortTitle"]; ?><br />
        <?php 
          if ($articles[$i]["LongTitle"] > "") {
        ?>
            </span><?php echo $articles[$i]["LongTitle"]; ?><span class="bolds"><br />
        <?php
          }
        ?>
        </span><span class="readarticle"><?php echo date("F j, Y", strtotime($articles[$i]["ArticleDate"])); ?> :: <a href="articles/<?php echo $articles[$i]["PDFname"]; ?>" target="_blank">Read</a></span>
        <?php
          if (count($articles[$i]["OtherFiles"]) > 0) {
            for ($j=0; $j<count($articles[$i]["OtherFiles"]); $j++) {
              echo ' <a href="articles/'.$articles[$i]["OtherFiles"][$j].'" target="_blank">'.($j+2).'</a></span>';
            }
          }
    }
  }

 ?>
 <div class="panelcollapsed">
  <h2>2016</h2>
  <div class="panelcontent">

   
  </div>
</div>

 <div class="panelcollapsed">
  <h2>2015</h2>
  <div class="panelcontent">

    <?php 
      $thisYear = '2015';
      for ($i=0; $i<count($articles); $i++) {
        if (date('Y',strtotime($articles[$i]["ArticleDate"])) == $thisYear) {
          ?>
           <p class="text"><span class="bolds"><?php echo $articles[$i]["ShortTitle"]; ?><br />
            </span><?php echo $articles[$i]["LongTitle"]; ?><span class="bolds"><br />
            </span><span class="readarticle"><?php echo date("F j, Y", strtotime($articles[$i]["ArticleDate"])); ?> :: <a href="articles/<?php echo $articles[$i]["PDFname"]; ?>" target="_blank">Read</a></span>
          <?php 
        }
      }

     ?>
  </div>
</div>


<div class="panelcollapsed">
  <h2>2014</h2>
  <div class="panelcontent">

<?php 
  $thisYear = '2014';
  for ($i=0; $i<count($articles); $i++) {
    if (date('Y',strtotime($articles[$i]["ArticleDate"])) == $thisYear) {
      ?>
       <p class="text"><span class="bolds"><?php echo $articles[$i]["ShortTitle"]; ?><br />
        </span><?php echo $articles[$i]["LongTitle"]; ?><span class="bolds"><br />
        </span><span class="readarticle"><?php echo date("F j, Y", strtotime($articles[$i]["ArticleDate"])); ?> :: <a href="articles/<?php echo $articles[$i]["PDFname"]; ?>" target="_blank">Read</a></span>
      <?php 
    }
  }

 ?>


   <p class="text"><span class="bolds">A powerful Advantage<br />
    </span>Villages Health doctors say Medicare Advantage makes them better<span class="bolds"><br />
    </span><span class="readarticle">November 1, 2014 :: <a href="articles/VDS_1102_2014_A06.pdf" target="_blank">Read</a></span>

   <p class="text"><span class="bolds">Empowering patients<br />
    </span>Villages Health touts benefits of Medicare Advantage, preventive care<span class="bolds"><br />
    </span><span class="readarticle">October 26, 2014 :: <a href="articles/VDS_1026_2014_A06.pdf" target="_blank">Read</a></span>
	
    <p class="text"><span class="bolds">Villages Health encouraging
      patients to attend weekly fairs<br />
    </span><span class="readarticle">October 19, 2014 :: <a href="articles/VDS_1019_2014_A06.pdf" target="_blank">Read</a></span>
	
  <p class="text"><span class="bolds">Positive changes<br />
    </span>Belleview Care Center reopens after renovation<span class="bolds"><br />
    </span><span class="readarticle">October 12, 2014 :: <a href="articles/VDS_1012_2014_A10.pdf" target="_blank">Read</a></span>
	
  
  <p class="text"><span class="bolds">A show of appreciation<br />
    </span>Villages Health hosts first of six events to thank patients for support<span class="bolds"><br />
    </span><span class="readarticle">October 5, 2014 :: <a href="articles/VDS_1005_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Medicare Q&amp;A<br />
    </span>UnitedHealthcare's Clarkson offers pertinent information for beneficiaries<span class="bolds"><br />
    </span><span class="readarticle">September 28, 2014 :: <a href="articles/VDS_0928_2014_A06.pdf" target="_blank">Read</a></span>
	
  <p class="text"><span class="bolds">Learning about Medicare<br />
    </span><span class="readarticle">September 21, 2014 :: <a href="articles/VDS_0921_2014_A06.pdf" target="_blank">Read</a></span>
	
     <p class="text"><span class="bolds">Medicare Q&amp;A<br />
    </span>UnitedHealthcare's Clarkson offers pertinent information for beneficiaries<span class="bolds"><br />
    </span><span class="readarticle">September 14, 2014 :: <a href="articles/VDS_0914_2014_A06.pdf" target="_blank">Read</a></span>
	
    <p class="text"><span class="bolds">Planning out your health care<br />
    </span>National Medicare Education Week coming back to The Villages<span class="bolds"><br />
    </span><span class="readarticle">September 7, 2014 :: <a href="articles/VDS_0907_2014_A06.pdf" target="_blank">Read</a></span>
	
   <p class="text"><span class="bolds">Key communications<br />
    </span>Villages Health doctors, physician extenders constantly talking about patients<span class="bolds"><br />
    </span><span class="readarticle">August 31, 2014 :: <a href="articles/VDS_0831_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">A special renovation<br />
    </span>Changes at Belleview Care Center designed with patients in mind<span class="bolds"><br />
    </span><span class="readarticle">August 24, 2014 :: <a href="articles/VDS_0824_2014_A06.pdf" target="_blank">Read</a></span>
	
  <p class="text"><span class="bolds">Sharing their knowledge<br />
    </span>Villages Health doctors tout benefits of training medical students    <span class="bolds"><br />
    </span><span class="readarticle">August 17, 2014 :: <a href="articles/VDS_0817_2014_A06.pdf" target="_blank">Read</a></span>
  
   <p class="text"><span class="bolds">Villages Health plays host to its first USF medical student<br />
    </span><span class="readarticle">August 17, 2014 :: <a href="articles/VDS_0817_2014_A01.pdf" target="_blank">Read</a></span>
  
  
   <p class="text"><span class="bolds">Access to Care<br />
    </span>Physician extenders help make patient-centered concept reality<br />
    <span class="readarticle">August 10, 2014 :: <a href="articles/VDS_0810_2014_A06.pdf" target="_blank">Read</a></span>
	 <p class="text"><span class="bolds">AAMC chief 
	   touts Villages
	   Health primary
	   care initiative<br />
    </span><span class="readarticle">August 3, 2014 :: <a href="articles/VDS_0803_2014.pdf" target="_blank">Read</a></span>
	 <p class="text"><span class="bolds">Extending Care<br />
    </span>Villages Health doctors say team members' backgrounds impressive<br />
    <span class="readarticle">July 27, 2014 :: <a href="articles/VDS_0727_2014_A06.pdf" target="_blank">Read</a></span>
	 <p class="text"><span class="bolds">Excited about the future<br />
    </span>New USF Health leader touts partnership, calls community 'dream' environment<br />
    <span class="readarticle">July 20, 2014 :: <a href="articles/VDS_0720_2014_A06.pdf" target="_blank">Read</a></span>
	 <p class="text"><span class="bolds">Perfect partnership<br />
    </span>Villages Health doctors say physician extenders play vital role<br />
    <span class="readarticle">July 13, 2014 :: <a href="articles/VDS_0713_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Extending the reach<br />
    </span>Physician assistants, nurse practitioners key to providing patient access<br />
    <span class="readarticle">July 6, 2014 :: <a href="articles/VDS_0706_2014_A06.pdf" target="_blank">Read</a></span><p class="text"><span class="bolds">A special synergy<br />
        </span>For Villages Health providers, teamwork centers around patients    <span class="bolds"><br />
        </span><span class="readarticle">June 29, 2014 :: <a href="articles/VDS_0629_2014.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Specialty care shifts
    to The Villages Health<br />
    </span><span class="readarticle">June 29, 2014 :: <a href="articles/VDS_0629_2014 2.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Team Approach<br />
    </span>For Villages Health providers, collegiality high on priority list<br />
    <span class="readarticle">June 22, 2014 :: <a href="articles/VDS_0622_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Agent of change<br />
    </span>Management expert offers insights, advice for Villages Health success<br />
    <span class="readarticle">June 15, 2014 :: <a href="articles/VDS_0615_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Tracking Success<br />
    </span>Researcher ponders ways data can be collected in study of Villages Health<br />
    <span class="readarticle">June 8, 2014 :: <a href="articles/VDS_0608_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">The Joy of Flight<br />
    </span>USF Health surgeons recall special airborne adventures<br />
    .......................................<br />
    <span class="bolds">Fixing health care: All
    about Dr. Christine Stopyra</span><br />
    <span class="readarticle">June 1, 2014 :: <a href="articles/VDS_0601_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Educational Bond<br />
    </span>USF Health doctors say military medical school offered excellent training<br />
    ........................................<br />
    <span class="bolds">Fixing health care: All
    about Dr. Paul Daluga</span><br />
    <span class="readarticle">May 25, 2014 :: <a href="articles/VDS_0525_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">A need to serve<br />
    </span>USF Health specialists credit military with helping to shape their lives<br />
    .........................................<br />
    <span class="bolds">Fixing health care: All 
    about ARNP Ginger Clive</span><br />
    <span class="readarticle">May18, 2014 :: <a href="articles/VDS_0518_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">A Special Bond<br />
    </span>Health care expert offers praise for Villages Health, social connectedness in community<br />
    .........................................<br />
    <span class="bolds">Fixing health care: All
    about Dr. Tomas Perez</span><br />
    <span class="readarticle">May 11, 2014 :: <a href="articles/VDS_0511_2014_A06.pdf" target="_blank">Read</a></span>
  
  
  
  <p class="text"><span class="bolds">Commitment to patients<br />
    </span>Longtime health care leader praises Villages Health model, dedication to strong relationships<br />
    <span class="readarticle">May 4, 2014 :: <a href="articles/VDS_0504_2014_A06.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Pathway to change<br />
    </span>Leading health care researcher says others can learn from The Villages Health model<br />
    <span class="readarticle">April 27, 2014 :: <a href="articles/VDS_0427_2014_A06.pdf" target="_blank">Read</a></span>
	
  <p class="text"><span class="bolds">Villages Health launches new care center</span><br />
    <span class="readarticle">April 20, 2014 :: <a href="articles/VDS_0420_2014_A07.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Patient-centered care</span><br />
    Medical providers at newest Villages Health facility praised for listening<br />
     <span class="readarticle">April 20, 2014 :: <a href="articles/VDS_0420_2014_A06.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">Focusing on mental health</span><br />
    Psychiatrist/hospital leader offers thoughts, praise for Villages Health initiative<br />
     <span class="readarticle">April 13, 2014 :: <a href="articles/VDS_0413_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Perfect match</span><br />
    Audiologists say primary care setting best place to practice<br />
     <span class="readarticle">April 6, 2014 :: <a href="articles/VDS_0406_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Villages Health doctors excited to team up with audiologists</span><br />
     <span class="readarticle">April 6, 2014 :: <a href="articles/VDS_0406_2014_A01.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">Labor of love</span><br />
   Audiologists strive to change Villagers'
lives by improving their hearing<br />
     <span class="readarticle">March 30, 2014 :: <a href="articles/VDS_0330_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Restoring the sounds of life</span><br />
    Villages Health audiologists step in to help patients with hearing issues<br />
     <span class="readarticle">March 30, 2014 :: <a href="articles/VDS_0330_2014_A01.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">'Exciting' opportunities</span><br />
    Physician/economist says initiative can lead to positive changes in health care<br />
     <span class="readarticle">March 23, 2014 :: <a href="articles/VDS_0323_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Joining the team</span><br />
    Patients flock to Mulberry Grove Care Center for grand-opening event<br />
     <span class="readarticle">March 16, 2014 :: <a href="articles/VDS_0316_2014_A01.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">Walking the walk</span><br />
    Harvard professor: Villages Health on right track with patient-centered care<br />
     <span class="readarticle">March 9, 2014 :: <a href="articles/VDS_0309_2014_A06.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">Valued Input</span><br />
     Health care expert offers praises for Villages Health model<br />
     <span class="readarticle">March 2, 2014 :: <a href="articles/VDS_0302_2014_A06.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">Ready to teach the future</span><br />
   Villages Health doctors excited about training USF Health students     <br />
     <span class="readarticle">February23, 2014 :: <a href="articles/VDS_0223_2014_A06.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Fixing health care: All
    about Dr. Mariel Gonzalez Mendoza</span><br />
     <span class="readarticle">February16, 2014 :: <a href="articles/2.16.14.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Wild Olympic ride</span><br />
  Villages Health doctor spent 8 years treating US luge team
  <br />
     <span class="readarticle">February16, 2014 :: <a href="articles/2.16.14.pdf" target="_blank">Read</a></span>
	 
  <p class="text"><span class="bolds">The medical directors who oversee care centers for The Villages Health<br />
are excited to CHARGE AHEAD as the organization enters its second year</span><br />     
    <span class="readarticle">February 2, 2014 :: <a href="articles/2.2.14.pdf" target="_blank">Read</a></span>
	
  <p class="text"><span class="bolds">Providing care with pride</span><br />
  USF Health celebrates addition of specialty care center
  <br />
     <span class="readarticle">January 26, 2014 :: <a href="articles/1.26.14.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Leading the charge</span><br />
  Reilly prepares for new role in opening two care centers
  <br />
     <span class="readarticle">January 12, 2014 :: <a href="articles/1.12.14.pdf" target="_blank">Read</a></span>
  <p class="text"><span class="bolds">Villages Health has big plans for 2014</span><br />
     <span class="readarticle">January 5, 2014 :: <a href="articles/1.5.14.pdf" target="_blank">Read</a></span>
  </div>
</div>	 

  <div class="panelcollapsed">
  <h2>2013</h2>
  <div class="panelcontent">
  <p class="text"><span class="bolds">Limiting patient count</span><br />
    Doctors with full panels looking forward to providing excellent care
  <br />
  <span class="readarticle">December 29, 2013 :: <a href="articles/12.29.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Open for Business</span><br />
      Pinellas joins ranks of Villages Health
      facilities providing primary care in
      Florida's Friendliest Hometown<br />
  <span class="readarticle">December 22, 2013 :: <a href="articles/12.22.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">A Special Anniversary</span><br />
    Colony Care Center celebrates year of
  providing primary care in a different way
  <br />
  <span class="readarticle">December 15,, 2013 :: <a href="articles/12.15.13.pdf" target="_blank">Read</a></span>    
  <p class="text"><span class="bolds">Solid leap of faith    </span><br />
    Jordahls were first medical providers to say 'yes' to Villages Health    <br />
    <span class="readarticle">December 8,, 2013 :: <a href="articles/12.8.13.pdf" target="_blank">Read</a></span>    
  <p class="text"><span class="bolds">Fixing health care: All
    about Dr. Uyen Anh Nguyen</span><br />
  <span class="readarticle">November 10, 2013 :: <a href="articles/11.10.13.pdf" target="_blank">Read</a></span>
    
  <p class="text"><span class="bolds">Taking the reins</span><br />
    Villages Health promotes Noel to Pinellas medical director    <br />
<span class="readarticle">November 3, 2013 :: <a href="articles/11.3.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: All
about Dr. Catherine Horner</span><br />
<span class="readarticle">October 27, 2013 :: <a href="articles/10.27.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: All
about Dr. Nasseer Masoodi</span><br />
<span class="readarticle">October 13, 2013 :: <a href="articles/10.13.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">$0 premium, $0 co-pay
for primary care visits</span><br />
      UnitedHealthcare rolls out Medicare Advantage plan<br />
  <span class="readarticle">October 8, 2013 :: <a href="articles/10.8.13.pdf" target="_blank">Read</a></span>  
  
  <p class="text"><span class="bolds">New Care Center Welcomes Patients</span><br />
      Santa Barbara becomes second primary care facility to open in The Villages<br />
  <span class="readarticle">October 6, 2013 :: <a href="articles/10.6.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Learning to stay healthy</span><br />
      USF Health's Wixted says education big part of wellness<br />
  <span class="readarticle">September 29, 2013 :: <a href="articles/9.29.13.pdf" target="_blank">Read</a></span>
  
<p class="text"><span class="bolds">Shaping the future of health</span><br />
  <span class="readarticle">September 22, 2013 :: <a href="articles/9.22.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Specialists onboard</span><br />
      USF Specialty Care Center nearing completion<br />
  <span class="readarticle">September 15, 2013 :: <a href="articles/9.15.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">United Healthcare to host
Medicare Education Week</span><br />
  <span class="readarticle">September 12, 2013 :: <a href="articles/9.12.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Collaborative care<br />
      </span>Villages Health doctors cover for each other to ensure seamless care<span class="bolds"><br />
      </span><span class="readarticle">September 1, 2013 :: <a href="articles/9.1.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Staying the path<br />
      </span>USF Health's interim dean excited about initiative to revamp health care<span class="bolds"><br />
      </span><span class="readarticle">August 25, 2013 :: <a href="articles/8.25.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Health care with a HEART</span><br />
  <span class="readarticle">August 18, 2013 :: <a href="articles/8.18.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Medical Specialist Piece Quickly Falling Into Place</span><br />
  <span class="readarticle">August 11, 2013 :: <a href="articles/8.11.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Proud Fathers</span><br />
  <span class="readarticle">August 9, 2013 :: <a href="articles/8.9.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">In the Villages, USF Health partnership fills missing piece<br />
    </span><span class="readarticle">Tampa Bay Times; August 4, 2013 :: <a href="http://www.tampabay.com/news/health/in-the-villages-usf-health-partnership-fills-missing-piece/2134690" target="_blank">Read</a></span>
      
  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Susan Hawley</span><br />
  <span class="readarticle">August 4, 2013 :: <a href="articles/8.4.13.pdf" target="_blank">Read</a></span>
    
  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Brent Stabler</span><br />
<span class="readarticle">July 28, 2013 :: <a href="articles/7.28.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Brooks Betts</span><br />
<span class="readarticle">July 21, 2013 :: <a href="articles/7.21.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Christopher Pead</span><br />
<span class="readarticle">July 14, 2013 :: <a href="articles/7.14.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Searching to find people who love serving people</span><br />
<span class="readarticle">July 9, 2013 :: <a href="articles/7.9.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Designed with comfort in mind</span><br />
<span class="readarticle">July 7, 2013 :: <a href="articles/7.7.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Industry Applauds Villages</span><br />
    Medical world taking note of how community is revolutionizing health care
    <br />
<span class="readarticle">June 30, 2013 :: <a href="articles/6.30.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">America's Health Rankings® Senior Report</span><br />
    United Health Foundation®
    <br />
<span class="readarticle">2013 Edition :: <a href="articles/Americas_Health_Rankings_Senior_Edition_2013_final.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">You're Talking, We're Listening</span><br />
<span class="readarticle">May 29, 2013 :: <a href="articles/5.29.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. J.D. Steed</span><br />
<span class="readarticle">May 25, 2013 :: <a href="articles/5.25.13.pdf" target="_blank">Read</a></span>

<p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Saul Rosenblum</span><br />
<span class="readarticle">May 24, 2013 :: <a href="articles/5.24.13.pdf" target="_blank">Read</a></span>

<p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Dave Jordahl</span><br />
<span class="readarticle">May 23, 2013 :: <a href="articles/5.23.13.pdf" target="_blank">Read</a></span>
  
  <p class="text"><span class="bolds">Fixing health care: Getting to know Dr. Joe Hildner</span><br />
<span class="readarticle">May 22, 2013 :: <a href="articles/5.22.13.pdf" target="_blank">Read</a></span>

  <p class="text"><span class="bolds">Fixing health care: All about Dr. Elliot Sussman</span><br />
<span class="readarticle">May 21, 2013 :: <a href="articles/5.21.13.pdf" target="_blank">Read</a></span> 

  <p class="text"><span class="bolds">Paging Dr. Right...</span><br />
<span class="readarticle">May 20, 2013 :: <a href="articles/5.20.13.pdf" target="_blank">Read</a></span> 

  <p class="text"><span class="bolds">Fixing Health Care</span><br />
<span class="readarticle">May 19, 2013 :: <a href="articles/5.19.13.pdf" target="_blank">Read</a></span> 

  <p class="text"><span class="bolds">Please come along for this health care ride of a lifetime.</span><br />
<span class="readarticle">May 12, 2013 :: <a href="articles/Health care ride of a lifetime.pdf" target="_blank">Read</a></span> 

  <p class="text"><span class="bolds">Health Care –– Villages Style</span><br />
<span class="readarticle">May 9, 2013 :: <a href="articles/Health care - Villages Style.pdf" target="_blank">Read</a></span>

  <p class="bolds"><span class="bolds">Work begins on USF Health Specialty Care Center in The Villages</span><br />
    <span class="readarticle">March 11, 2013 :: <a href="http://hscweb3.hsc.usf.edu/blog/2013/03/11/work-begins-on-usf-health-specialty-care-center-in-the-villages/" target="_blank">Read</a></span>  </p>
    </div>
</div>

 <div class="panelcollapsed">
  <h2>2012</h2>
  <div class="panelcontent">

  <p class="text"><span class="bolds">The Villages Health Survey results are in!</span><br />
    Dr. Donna Petersen --
    USF Health<br />
<span class="readarticle">August 21, 2012 :: <a href="articles/lecture_slides.pdf" target="_blank">Read</a></span></p>
  <p class="text"><span class="bolds">America's Healthiest Hometown</span><br /> 
    Putting Patients First<br />
    <span class="readarticle">April 25, 2012 :: <a href="articles/patients first.pdf" target="_blank">Read</a></span></p>
  <p class="text"><span class="bolds">Needed to fix the health system:</span><br />
    '21st century Dr. Marcus Welbys'<br />
  <span class="readarticle">March 25, 2012 :: <a href="articles/Paper 3-25.pdf" target="_blank">Read</a></span>  </p>
    <p class="text"><span class="bolds">How Would You Want Your Mother Treated?</span><br />
      That question drives award-winning practice<br />
  <span class="readarticle">March 11, 2012 :: <a href="articles/Patient care.pdf" target="_blank">Read</a></span>    </p>

<p class="text"><span class="bolds">America's Healthiest Hometown</span><br />
    The Villages strives to change medical care, bring back days of 'Marcus Welby'<br />
  <span class="readarticle">March 10, 2012 :: <a href="articles/Healthiest Hometown.pdf" target="_blank">Read</a></span></p>
    </div>
</div>

<div class="panelcollapsed">
  <h2>2011</h2>
  <div class="panelcontent">
<p><span class="bolds">We want to know what 86,000 Villagers think<br />
</span><span class="text">Study Strives to Improve Health Across Entire Nation</span><br />
<span class="readarticle">November 13, 2011 :: <a href="articles/VDS_1113_C05.pdf" target="_blank">Read</a></span></p>
    </div>
</div>

</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>