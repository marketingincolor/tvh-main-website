<html>
<head>
<?php include( 'gtm_head.php' ); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="jquery.validity.min.js"></script>
  <link href="jquery.validity.css" rel="stylesheet" type="text/css" />

  <script>
      /*$(".form-submit-button").on("click",function() {
        $(this).prop("disabled",true);
      });
      */
    $(document).ready(function () {
    	
      $("#staffjobsform").validity(function() {
      	attachfile = $("#input_12").val() == "";
    	console.log("no attached: " + attachfile);
    	$("#first_4").require();
        $("#last_4").require();
        $("#input_5").require().match("email");
        $("#input_7_area").require()
                          .match("number")
                          .greaterThan(99,"Area Code is too short.")
                          .lessThan(1000,"Area Code is too longs.");
        $("#input_7_phone").require()
                          .match("number")
                          .greaterThan(999999,"Phone Number is too short.")
                          .lessThan(10000000,"Phone Number is too long.");
		$("#input_10").require();
        $("#input_12").assert(!attachfile,"Please attach your resume");
      });

      
    });
  </script>
  <link rel="stylesheet" href="forms.css" type="text/css" media="screen">
</head>

<body> 
<?php include( 'gtm_body.php' ); ?>
<img src="images/apply.png" width="128" height="33" />


<form class="jotform-form" action="forms-submit.php" method="post" enctype="multipart/form-data" name="staffjobsform" id="staffjobsform" accept-charset="utf-8">  
	<input type="hidden" name="FormName" value="Staff Jobs">  
	<input type="hidden" name="ReturnTo" value="staffjobs.php">  
	<div class="form-all">    
		<ul class="form-section">      
			<li class="form-line jf-required" data-type="control_fullname" id="id_4">        
				<label class="form-label form-label-top" id="label_4" for="input_4">          Full Name         
				 <span class="form-required">            *          </span>        
				</label>        
				<div id="cid_4" class="form-input-wide jf-required">          
					<span class="form-sub-label-container" style="vertical-align: top">            
						<input class="form-textbox validate[required]" type="text" size="10" name="q4_fullName[first]" id="first_4"title="First Name" />            
						<label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height: 13px;"> First Name </label>          
					</span>          
					<span class="form-sub-label-container" style="vertical-align: top">            
						<input class="form-textbox validate[required]" type="text" size="15" name="q4_fullName[last]" id="last_4" />            
						<label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height: 13px;"> Last Name </label>          
					</span>        
				</div>     
			</li>      
			<li class="form-line jf-required" data-type="control_email" id="id_5">        
				<label class="form-label form-label-top" id="label_5" for="input_5">          E-mail          
					<span class="form-required">            *          </span>        
				</label>        
				<div id="cid_5" class="form-input-wide jf-required">          
					<input type="text" class=" form-textbox validate[required, Email]" id="input_5" name="q5_email5" title="Email" size="30" value="" 
						placeholder="ex: myname@example.com"/>        
				</div>      
			</li>      
			<li class="form-line jf-required" data-type="control_phone" id="id_7">        
				<label class="form-label form-label-top" id="label_7" for="input_7">          Phone Number          
					<span class="form-required">            *          </span>        
				</label>        
				<div id="cid_7" class="form-input-wide jf-required">          
					<span class="form-sub-label-container" style="vertical-align: top">            
						<input class="form-textbox validate[required]" type="text" name="q7_phoneNumber7[area]" id="input_7_area" size="3">            
						<span class="phone-separate">              &nbsp;-            </span>            
						<label class="form-sub-label" for="input_7_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>          
					</span>          
					<span class="form-sub-label-container" style="vertical-align: top">            
						<input class="form-textbox validate[required]" type="text" name="q7_phoneNumber7[phone]" id="input_7_phone" size="8">            
						<label class="form-sub-label" for="input_7_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>          
					</span>        
				</div>      
			</li>      
			<li class="form-line" data-type="control_checkbox" id="id_14">        
				<label class="form-label form-label-top" id="label_14" for="input_14"> I prefer to be contacted by </label>        
				<div id="cid_14" class="form-input-wide jf-required">          
					<div class="form-single-column">            
						<span class="form-checkbox-item" style="clear:left;">              
							<input type="checkbox" class="form-checkbox" id="input_14_0" name="q14_iPrefer[]" value="Phone" />              
							<label for="input_14_0"> Phone </label>            
						</span>            
						<span class="clearfix">            </span>            
						<span class="form-checkbox-item" style="clear:left;">              
							<input type="checkbox" class="form-checkbox" id="input_14_1" name="q14_iPrefer[]" value="Email" />              
							<label for="input_14_1"> Email </label>            
						</span>            
						<span class="clearfix">            </span>          
					</div>        
				</div>      
			</li>      
			<li class="form-line" data-type="control_textbox" id="id_15">        
				<label class="form-label form-label-top" id="label_15" for="input_15"> Best time to contact me by phone is </label>        
				<div id="cid_15" class="form-input-wide jf-required">          
					<input type="text" class=" form-textbox" data-type="input-textbox" id="input_15" name="q15_bestTime" size="20" value="" />        
				</div>      
			</li>      
			<li class="form-line form-line-column form-col-1" data-type="control_address" id="id_13">        
				<label class="form-label form-label-top" id="label_13" for="input_13"> Address </label>        
				<div id="cid_13" class="form-input-wide jf-required">          
					<table summary="" undefined class="form-address-table" border="0" cellpadding="0" cellspacing="0">            
						<tr>              
							<td colspan="2">                
								<span class="form-sub-label-container" style="vertical-align: top">                  
									<input class="form-textbox form-address-line" type="text" name="q13_address13[addr_line1]" id="input_13_addr_line1" />                  
									<label class="form-sub-label" for="input_13_addr_line1" id="sublabel_13_addr_line1" style="min-height: 13px;"> Street Address </label>                
								</span>              
							</td>            
						</tr>            
						<tr>              
							<td colspan="2">                
								<span class="form-sub-label-container" style="vertical-align: top">                  
									<input class="form-textbox form-address-line" type="text" name="q13_address13[addr_line2]" id="input_13_addr_line2" size="46" />                  
									<label class="form-sub-label" for="input_13_addr_line2" id="sublabel_13_addr_line2" style="min-height: 13px;"> Street Address Line 2 </label>                
								</span>              
							</td>            
						</tr>            
						<tr>              
							<td width="50%">                
								<span class="form-sub-label-container" style="vertical-align: top">                  
									<input class="form-textbox form-address-city" type="text" name="q13_address13[city]" id="input_13_city" size="21" />                  
									<label class="form-sub-label" for="input_13_city" id="sublabel_13_city" style="min-height: 13px;"> City </label>                
								</span>              
							</td>              
							<td>                
								<span class="form-sub-label-container" style="vertical-align: top">                  
									<input class="form-textbox form-address-state" type="text" name="q13_address13[state]" id="input_13_state" size="22" />                  
									<label class="form-sub-label" for="input_13_state" id="sublabel_13_state" style="min-height: 13px;"> State / Province </label>                
								</span>              
							</td>            
						</tr>            
						<tr>              
							<td width="50%">                
								<span class="form-sub-label-container" style="vertical-align: top">                  
									<input class="form-textbox form-address-postal" type="text" name="q13_address13[postal]" id="input_13_postal" size="10" />                  
									<label class="form-sub-label" for="input_13_postal" id="sublabel_13_postal" style="min-height: 13px;"> Postal / Zip Code </label>                
								</span>              
							</td>              
							<td>                
								<span class="form-sub-label-container" style="vertical-align: top">  
									<select class="form-dropdown form-address-country" name="q13_address13[country]" id="input_13_country">   
										<?php include "select-country.php"; ?>                
									</select>
									<label class="form-sub-label" for="input_13_country" id="sublabel_13_country" style="min-height: 13px;"> Country </label> 
								</span>              
							</td>            
						</tr>          
					</table>        
				</div>      
			</li>      
			<li class="form-line jf-required" data-type="control_textbox" id="id_10">        
				<label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">          Desired Position          
					<span class="form-required">            *          </span>        
				</label>        
				<div id="cid_10" class="form-input jf-required">          
					<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_10" name="q10_desiredPosition" title="Desired Position" size="20" value="" />        
				</div>      
			</li>      
			<li class="form-line form-line-column form-col-1 jf-required" data-type="control_fileupload" id="id_12">        
				<label class="form-label form-label-top" id="label_12" for="input_12">          Please attach your current resume          
					<span class="form-required">            *          </span>        
				</label>        
				<div id="cid_12" class="form-input-wide jf-required">          
					<input class="form-upload validate[required]" type="file" id="input_12" name="q12_pleaseAttach12" title="Current Resume" 
						file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip" file-maxsize="10239" file-minsize="0" file-limit="0" />        
				</div>      
			</li>      
			<li class="form-line" data-type="control_checkbox" id="id_17">        
				<label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> How did you hear about The Villages Health? </label>        
				<div id="cid_17" class="form-input jf-required">          
					<div class="form-single-column">            
						<span class="form-checkbox-item" style="clear:left;">              
							<input type="checkbox" class="form-checkbox" id="input_17_0" name="q17_howDid17[]" value="Web ad" />              
							<label for="input_17_0"> Web ad </label>            
						</span>            
						<span class="clearfix">            </span>            
						<span class="form-checkbox-item" style="clear:left;">              
							<input type="checkbox" class="form-checkbox" id="input_17_1" name="q17_howDid17[]" value="Newspaper ad" />              
							<label for="input_17_1"> Newspaper ad </label>            
						</span>            
						<span class="clearfix">            </span>            
						<span class="form-checkbox-item" style="clear:left;">              
							<input type="checkbox" class="form-checkbox" id="input_17_2" name="q17_howDid17[]" value="Word of Mouth" />              
							<label for="input_17_2"> Word of Mouth </label>            
						</span>            
						<span class="clearfix">            </span>          
					</div>        
				</div>      
			</li>      
			<li class="form-line" data-type="control_textbox" id="id_18">        
				<label class="form-label form-label-left" id="label_18" for="input_18"> Other </label>        
				<div id="cid_18" class="form-input jf-required">          
					<input type="text" class=" form-textbox" data-type="input-textbox" id="input_18" name="q18_other" size="20" value="" maxlength="120" />        
				</div>      
			</li>      
			<li class="form-line" data-type="control_button" id="id_2">        
				<div id="cid_2" class="form-input-wide">          
					<div style="text-align:left" class="form-buttons-wrapper">            
						<button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_white">              Submit            </button>          
					</div>        
				</div>      
			</li>      
			<li style="display:none">        Should be Empty:        
				<input type="text" name="website" value="" />      
			</li>    
		</ul>  
	</div>  
	<input type="hidden" id="simple_spc" name="simple_spc" value="32026657605958" />  
	<script type="text/javascript">  document.getElementById("si" + "mple" + "_spc").value = "32026657605958-32026657605958";  </script>
</form>

</body>
</html>