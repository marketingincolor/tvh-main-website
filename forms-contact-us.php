
<html>
  <head>
  <?php include( 'gtm_head.php' ); ?>
  <?php include( 'gtm_head.php' ); ?>
    <script src="jquery-1.9.1.js"></script>
    <script src="jquery.validity.min.js"></script>
    <link href="jquery.validity.css" rel="stylesheet" type="text/css" />

    <script>
      $(document).ready(function () {
        
        $("#contactus").validity(function() {
          $("#input_5").require().match("email");
          $("#first_4").require();
          $("#last_4").require();
          $("#input_7_area").require()
                          .match("number")
                          .greaterThan(99,"Area Code is too short.")
                          .lessThan(1000,"Area Code is too longs.");
          $("#input_7_phone").require()
                          .match("number")
                          .greaterThan(999999,"Phone Number is too short.")
                          .lessThan(10000000,"Phone Number is too long.");
        });
        /*$(".validity-tooltip-outer").on("click",function() {
            console.log("tooltip clicked outer");
        });
        $(".validity-tooltip-inner").on("click",function() {
            console.log("tooltip clicked inner");
        });
*/
/*          $(".form-submit-button").on("click",function() {
            $(this).prop("disabled",true);
          });
  */      
        

      });
    </script>
    <style>
      body { vertical-align: left;}
    </style>
  </head>

<body>
<?php include( 'gtm_body.php' ); ?>
<?php include( 'gtm_body.php' ); ?>
  <link href="tvh.css" rel="stylesheet" type="text/css" />
  <link href="forms.css" rel="stylesheet" type="text/css" />
  <form  action="forms-submit.php" method="post" name="contactus" id="contactus" accept-charset="utf-8">
    <input type="hidden" name="formID" id="formID" value="20786280619157" />
    <input type="hidden" name="FormName" id="FormName" value="Contact Us">
    <!--<input type="hidden" name="ReturnTo" value="carecenters.php">-->
    <div class="form-all">
      <ul class="form-section">
        <li class="form-line" data-type="control_radio" id="id_10">
          <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> Do you need to request access to your secure online medical record? </label>
          <div id="cid_10" class="form-input jf-required">
            <div class="form-single-column">
              <span class="form-radio-item" style="clear:left;">
                <input type="radio" class="form-radio" id="input_10_0" name="q10_doYou10" value="Yes" />
                <label for="input_10_0"> Yes </label>
              </span>
              <span class="clearfix">
              </span>
              <span class="form-radio-item" style="clear:left;">
                <input type="radio" class="form-radio" id="input_10_1" name="q10_doYou10" value="No" />
                <label for="input_10_1"> No </label>
              </span>
              <span class="clearfix">
              </span>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_4">
          <label class="form-label form-label-top" id="label_4" for="input_4">
            Full Name
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_4" class="form-input-wide jf-required">
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="10" name="q4_fullName4[first]" id="first_4"title="First Name" />
              <label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height: 13px;"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="15" name="q4_fullName4[last]" id="last_4" title="Last Name"/>
              <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
            </span>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_email" id="id_5">
          <label class="form-label form-label-top" id="label_5" for="input_5">
            E-mail
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_5" class="form-input-wide jf-required">
            <input type="text" class=" form-textbox validate[required]" id="input_5" name="q5_email5" size="30" value="" title="EMail"/>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_phone" id="id_7">
          <label class="form-label form-label-top" id="label_7" for="input_7">
            Phone Number
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_7" class="form-input-wide jf-required">
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class=" form-textbox validate[required]" type="text" name="q7_phoneNumber7[area]" id="input_7_area" size="3" title="Area Code">
              <span class="phone-separate">
                &nbsp;-
              </span>
              <label class="form-sub-label" for="input_7_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class=" form-textbox validate[required]" type="text" name="q7_phoneNumber7[phone]" id="input_7_phone" size="8" title="Phone">
              <label class="form-sub-label" for="input_7_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_9">
          <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Preferred Method of Contact </label>
          <div id="cid_9" class="form-input jf-required">
            <div class="form-single-column">
              <span class="form-radio-item" style="clear:left;">
                <input type="radio" class="form-radio" id="input_9_0" name="q9_preferredMethod" value="Phone" />
                <label for="input_9_0"> Phone </label>
              </span>
              <span class="clearfix">
              </span>
              <span class="form-radio-item" style="clear:left;">
                <input type="radio" class="form-radio" id="input_9_1" name="q9_preferredMethod" value="E-mail" />
                <label for="input_9_1"> E-mail </label>
              </span>
              <span class="clearfix">
              </span>
              <span class="form-radio-item" style="clear:left;">
                <input type="radio" class="form-radio" id="input_9_2" name="q9_preferredMethod" value="Either" />
                <label for="input_9_2"> Either </label>
              </span>
              <span class="clearfix">
              </span>
              <span class="form-radio-item" style="clear:left">
                <input type="radio" class="form-radio-other form-radio" name="q9_preferredMethod" id="other_9" value="Other" />
                <input type="text" class="form-radio-other-input form-textbox" name="q9_preferredMethod_other" data-otherHint="Other" size="15" id="input_9" />
                <br />
              </span>
            </div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_textarea" id="id_8">
          <label class="form-label form-label-top" id="label_8" for="input_8"> Additional Comments </label>
          <div id="cid_8" class="form-input-wide jf-required">
            <textarea id="input_8" class="form-textarea" name="q8_additionalComments" cols="40" rows="6" placeholder="Please do not provide any personal medical information."></textarea>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_2">
          <div id="cid_2" class="form-input-wide">
            <div style="text-align:left" class="form-buttons-wrapper">
              <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_white">
                Submit
              </button>
            </div>
          </div>
        </li>
        <li style="display:none">
          Should be Empty:
          <input type="text" name="website" value="" />
        </li>
      </ul>
    </div>
    <input type="hidden" id="simple_spc" name="simple_spc" value="20786280619157" />
    <script type="text/javascript">
    document.getElementById("si" + "mple" + "_spc").value = "20786280619157-20786280619157";
    </script>
  </form>
</body>
</html>