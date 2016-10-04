<link href="tvh.css" rel="stylesheet" type="text/css" />
<link href="forms.css" rel="stylesheet" type="text/css">
    <script src="jquery-1.9.1.js"></script>
    <script src="jquery.validity.min.js"></script>
    <link href="jquery.validity.css" rel="stylesheet" type="text/css" />

<script>
      $(document).ready(function () {
        
        
        $("#newpatientform").validity(function() {
          medicare = $("#input_15").val() == "" || $("#input_15").val() == "Choose one";
          insurance = $("#input_11").val() == "" || $("#input_11").val() == "Choose one";
          $("#first_4").require();
          $("#input_15").assert(!medicare,"Medicare selection is required.");
          $("#input_11").assert(!insurance,"Insurance selection is required.");
          $("#last_4").require();
          $("#input_5").require();
          $("#input_7_area").require()
                            .match("number")
                            .greaterThan(99,"Area Code is not possible.")
                            .lessThan(1000,"Area Code is not possible.");
          $("#input_7_phone").require()
                            .match("number")
                            .greaterThan(999999,"Phone Number is not possible.")
                            .lessThan(10000000,"Phone Number is not possible.");
          $("#input_10_state").require();
          $("#input_10_addr_line1").require();
          $("#input_10_city").require();
          $("#input_10_zip").require();
        });
      });
  </script>
    
<form class="jotform-form" action="forms-submit.php" method="post" name="newpatientform" id="newpatientform" accept-charset="utf-8">
  <input type="hidden" name="FormName" value="NewPatient" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line jf-required" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q4_fullName4[first]" id="first_4" title="First Name" />
            <label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q4_fullName4[last]" id="last_4" title="Last Name" />
            <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_birthdate" id="id_16">
        <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16"> Date of Birth </label>
        <div id="cid_16" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <select class="form-dropdown" name="q16_dateOf[month]" id="input_16_month">
              <option>  </option>
              <option value="January"> January </option>
              <option value="February"> February </option>
              <option value="March"> March </option>
              <option value="April"> April </option>
              <option value="May"> May </option>
              <option value="June"> June </option>
              <option value="July"> July </option>
              <option value="August"> August </option>
              <option value="September"> September </option>
              <option value="October"> October </option>
              <option value="November"> November </option>
              <option value="December"> December </option>
            </select>
            <label class="form-sub-label" for="input_16_month" id="sublabel_month" style="min-height: 13px;"> Month </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <select class="form-dropdown" name="q16_dateOf[day]" id="input_16_day">
              <option>  </option>
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
              <option value="5"> 5 </option>
              <option value="6"> 6 </option>
              <option value="7"> 7 </option>
              <option value="8"> 8 </option>
              <option value="9"> 9 </option>
              <option value="10"> 10 </option>
              <option value="11"> 11 </option>
              <option value="12"> 12 </option>
              <option value="13"> 13 </option>
              <option value="14"> 14 </option>
              <option value="15"> 15 </option>
              <option value="16"> 16 </option>
              <option value="17"> 17 </option>
              <option value="18"> 18 </option>
              <option value="19"> 19 </option>
              <option value="20"> 20 </option>
              <option value="21"> 21 </option>
              <option value="22"> 22 </option>
              <option value="23"> 23 </option>
              <option value="24"> 24 </option>
              <option value="25"> 25 </option>
              <option value="26"> 26 </option>
              <option value="27"> 27 </option>
              <option value="28"> 28 </option>
              <option value="29"> 29 </option>
              <option value="30"> 30 </option>
              <option value="31"> 31 </option>
            </select>
            <label class="form-sub-label" for="input_16_day" id="sublabel_day" style="min-height: 13px;"> Day </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <select class="form-dropdown" name="q16_dateOf[year]" id="input_16_year">
              <option>  </option>
              <?php
                $oldest_age = 110;
                $youngest_age = 0;
                $this_year = date("Y");
                $start_year = $this_year - $youngest_age;
                $end_year = $this_year - $oldest_age;
                for ($i=$start_year; $i>=$end_year; $i--) {
                    echo "<option value='{$i}'> {$i} </option>" . "\r\n";
                }
              ?>
              
            </select>
            <label class="form-sub-label" for="input_16_year" id="sublabel_year" style="min-height: 13px;"> Year </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> Villages ID# </label>
        <div id="cid_14" class="form-input-wide jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_14" name="q14_villagesId" size="20" value="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_10">
        <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_10" class="form-input jf-required">
          <table summary="" undefined class="form-address-table" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox validate[required] form-address-line" type="text" name="q10_address10[addr_line1]" id="input_10_addr_line1" title="Street Address" />
                  <label class="form-sub-label" for="input_10_addr_line1" id="sublabel_10_addr_line1" style="min-height: 13px;"> Street Address </label>
                </span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox form-address-line" type="text" name="q10_address10[addr_line2]" id="input_10_addr_line2" size="46" />
                  <label class="form-sub-label" for="input_10_addr_line2" id="sublabel_10_addr_line2" style="min-height: 13px;"> Street Address Line 2 </label>
                </span>
              </td>
            </tr>
            <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox validate[required] form-address-city" type="text" name="q10_address10[city]" id="input_10_city" size="21" title="City" />
                  <label class="form-sub-label" for="input_10_city" id="sublabel_10_city" style="min-height: 13px;"> City </label>
                </span>
              </td>
              <td>
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox validate[required] form-address-state" type="text" name="q10_address10[state]" id="input_10_state" size="22" title="State" />
                  <label class="form-sub-label" for="input_10_state" id="sublabel_10_state" style="min-height: 13px;"> State / Province </label>
                </span>
              </td>
            </tr>
            <tr>
              <td width="50%">
                <span class="form-sub-label-container" style="vertical-align: top">
                  <input class="form-textbox validate[required] form-address-postal" type="text" name="q10_address10[postal]" id="input_10_postal" size="10" />
                  <label class="form-sub-label" for="input_10_postal" id="sublabel_10_postal" style="min-height: 13px;"> Postal / Zip Code </label>
                </span>
              </td>
              <td>
                <span class="form-sub-label-container" style="vertical-align: top">
                  <select class="form-dropdown validate[required] form-address-country" name="q10_address10[country]" id="input_10_country">
                    <?php include "select-country.php"; ?>
                  </select>
                  <label class="form-sub-label" for="input_10_country" id="sublabel_10_country" style="min-height: 13px;"> Country </label>
                </span>
              </td>
            </tr>
          </table>
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
            <input class="form-textbox validate[required]" type="text" name="q7_phoneNumber7[area]" id="input_7_area" size="3" title="Area Code">
            <span class="phone-separate">
              &nbsp;-
            </span>
            <label class="form-sub-label" for="input_7_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" name="q7_phoneNumber7[phone]" id="input_7_phone" size="8" title="Phone">
            <label class="form-sub-label" for="input_7_phone" id="sublabel_phone" style="min-height: 13px;"> Phone Number </label>
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
          <input type="text" class=" form-textbox validate[required, Email]" id="input_5" name="q5_email5" size="30" value="" placeholder="ex: myname@example.com" title="E-mail" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_15">
        <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
          Medicare Plans
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_15" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <select class="form-dropdown validate[required]" style="width:150px" id="input_15" name="q15_medicarePlans" title="Medicare">
              <option value="">  </option>
              <option selected="selected" value="Choose one"> Choose one </option>
              <option value="No Medicare"> No Medicare </option>
              <option value="Traditional Medicare"> Traditional Medicare </option>
              <option value="United Medicare Advantage"> United Medicare Advantage </option>
              <option value="UnitedHealthcare® The Villages® MedicareComplete® (HMO)"> UnitedHealthcare® The Villages® MedicareComplete® (HMO) </option>
              <option value="AARP® MedicareComplete Choice® (Regional PPO)"> AARP® MedicareComplete Choice® (Regional PPO) </option>
            </select>
            <label class="form-sub-label" for="input_15" style="min-height: 13px;"> If you don't have Medicare please choose NO MEDICARE </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11">
          Other/Commercial Insurance
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required">
          <select class="form-dropdown validate[required]" style="width:150px" id="input_11" name="q11_othercommercialInsurance" title="Insurance">
            <option value="">  </option>
            <option selected="selected" value="Choose one"> Choose one </option>
            <option value="None"> None </option>
            <!--<option value="Accountable Health Plan"> Accountable Health Plan </option>
            <option value="AARP"> AARP </option>-->
            <option value="Avmed"> Avmed </option>
            <option value="Blue Cross &amp; Blue Shield"> Blue Cross &amp; Blue Shield </option>
            <!--<option value="BCE Emergis"> BCE Emergis </option>
            <option value="Beech Street"> Beech Street </option>
            <option value="CCN"> CCN </option>
            <option value="CCN/One Source"> CCN/One Source </option>
            <option value="ChampVA"> ChampVA </option>-->
            <option value="Cigna"> Cigna </option>
            <!--<option value="Coventry Health Care/First Health"> Coventry Health Care/First Health </option>
            <option value="Evolutions Healthcare"> Evolutions Healthcare </option>
            <option value="First Health"> First Health </option>
            <option value="First Health Mail Handlers"> First Health Mail Handlers </option>
            <option value="GHI"> GHI </option>
            <option value="Great West"> Great West </option>
            <option value="Humana"> Humana </option>
            <option value="Humana PPO"> Humana PPO </option>
            <option value="Interplan"> Interplan </option>
            <option value="Mail Handlers"> Mail Handlers </option>-->
            <option value="Multiplan"> Multiplan </option>
            <!--<option value="NALC"> NALC </option>
            <option value="One Health Plan"> One Health Plan </option>
            <option value="Pacificare"> Pacificare </option>-->
            <option value="Private Healthcare System/PHCS"> Private Healthcare System/PHCS </option>
            <!--<option value="Proamerica"> Proamerica </option>
            <option value="Railroad Medicare"> Railroad Medicare </option>
            <option value="Southcare"> Southcare </option>
            <option value="Tricare for Life"> Tricare for Life </option>-->
            <option value="Tricare Standard"> Tricare Standard </option>
            <!--<option value="Up &amp; Up"> Up &amp; Up </option>-->
            <option value="United Healthcare"> United Healthcare </option>
          </select>
        </div>
      </li>
      <!--<li class="form-line" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12"> Other insurance </label>
        <div id="cid_12" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_12" name="q12_otherInsurance" size="20" value="" />
        </div>
      </li>-->
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
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_13">
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> I want to receive my New Patient Forms via </label>
        <div id="cid_13" class="form-input jf-required">
          <div class="form-single-column">
            <span class="form-radio-item" style="clear:left;">
              <input type="radio" class="form-radio" id="input_13_0" name="q13_iWant" value="Mail" />
              <label for="input_13_0"> Mail </label>
            </span>
            <span class="clearfix">
            </span>
            <span class="form-radio-item" style="clear:left;">
              <input type="radio" class="form-radio" id="input_13_1" name="q13_iWant" value="Email (download PDF)" />
              <label for="input_13_1"> Email (download PDF) </label>
            </span>
            <span class="clearfix">
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
  <input type="hidden" id="simple_spc" name="simple_spc" value="32205869647968" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "32205869647968-32205869647968";
  </script>
</form>