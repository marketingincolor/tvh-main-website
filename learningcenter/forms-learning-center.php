

<form id="LearningCenterForm" name="LearningCenterForm" class="wufoo topLabel page1" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="/forms-submit.php">
      <input type=hidden name="FormName" value='The Learning Center'>
      <input type=hidden name="Location" value='<?php echo $_REQUEST["this_location"]; ?>'>
      <input type=hidden name="ClassTitle" value='<?php echo $_REQUEST["this_class"]; ?>'>
      <input type=hidden name="StartDate" value='<?php echo $_REQUEST["start_date"]; ?>'>
      <input type=hidden name="StartTime" value='<?php echo $_REQUEST["start_time"]; ?>'>
      <input type=hidden name="ReturnTo" value='/learningcenter/index.php'>
      <input type=hidden name="CloseThis" value='1'>
  
<header id="header" class="info">
	<h2><?php 
		if (isset($_REQUEST["this_location"])) echo $_REQUEST["this_location"] . ", ";
		echo $_REQUEST["this_class"]; ?></h2>
	<div><?php if (isset($_REQUEST["start_date"])) echo $_REQUEST["start_date"] . " at " .  $_REQUEST["start_time"]; ?></div>
</header>

<ul>
	
	
	
	
<li id="fo433li1" 		class="notranslate      ">
	<label class="desc" id="title1" for="Field1">
		Name
				<span id="req_1" class="req">*</span>
			</label>
	<div>
		<input id="Field1" 			name="Name" 			title="Name"
			type="text" 			class="field text medium" 			
			maxlength="255" 						tabindex="1" 			
			onkeyup="handleInput(this); " 						onchange="handleInput(this);" 			      			required 			/>
			</div>
	</li>



<li id="fo433li2" 		class="phone notranslate      ">
	<label class="desc" id="title2" for="Field2">
		Phone Number
				<span id="req_2" class="req">*</span>
			</label>
	<span>
		<input id="Field2" 			name="Phone[1]" 			type="tel" 			class="field text" 			
			value="" 			size="3" 			maxlength="3" 			tabindex="2" 						
			onkeyup="handleInput(this);" 			onchange="handleInput(this);" 			      			required 			/>
		<label for="Field2">###</label>
	</span>
	<span class="symbol">-</span>
	<span>
		<input id="Field2-1" 			name="Phone[2]" 			type="tel" 			class="field text" 			
			value="" 			size="3" 			maxlength="3" 			tabindex="3" 						
			onkeyup="handleInput(this);" 			onchange="handleInput(this);" 						required 			/>
		<label for="Field2-1">###</label>
	</span>
	<span class="symbol">-</span>
	<span>
	 	<input id="Field2-2" 			name="Phone[3]" 			type="tel" 			class="field text" 			
	 		value="" 			size="4" 			maxlength="4" 			tabindex="4" 						
	 		onkeyup="handleInput(this);" 			onchange="handleInput(this);" 						required 			/>
		<label for="Field2-2">####</label>
	</span>
	</li>



<li id="fo433li3" 		class="notranslate      ">
	<label class="desc" id="title3" for="Field3">
		Email
				<span id="req_3" class="req">*</span>
			</label>
	<div>
		<input id="Field3" 			name="Email" 			title="Email" 
			type="text" 			spellcheck="false" 			class="field text medium" 			
			value="" 			maxlength="255" 			tabindex="5"       						
			onkeyup="handleInput(this);" 			onchange="handleInput(this);" 						required 			/>
	</div>
	</li>

<li id="fo433li3" 		class="notranslate      ">
 <input type="radio" name="group1" value="I am a Villages Health Patient" /> Yes, I am a Villages Health Patient<br>
<input type="radio" name="group1" value="I am not a Villages Health Patient"  /> No, I am not a Villages Health Patient
</li>
	
	<li class="buttons ">
		<div>
								<input type="hidden" name="currentPage" id="currentPage" value="GYHhI2fZC4mH9hLBM62QKWs1yD03Gdi6Y6YxOTQTBPg=" />
			
			    <input id="saveForm" name="saveForm" class="btTxt submit"
			    	type="submit" value="REGISTER" />
					
		
				</div>
	</li>

		<li class="hide">
		<label for="comment">Do Not Fill This Out</label>
		<input type="hidden" id="idstamp" name="idstamp" value="5zT7rsoCcx7C/W1ET2r3OcpOF8HdU7jvjvgOYGd20AY=" />
				<input type="hidden" id="stats" name="stats" value="{&quot;errors&quot;:0,&quot;startTime&quot;:0,&quot;endTime&quot;:0,&quot;referer&quot;:&quot;http:\/\/www.thevillageshealth.com\/learningcenter\/colonyschedule.php&quot;}" />
				<input type="hidden" id="clickOrEnter" name="clickOrEnter" value="" />
			</li>
	</ul>
</form>
