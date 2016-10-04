


    <style>
      body { vertical-align: left;}
    </style>
  
  <!--<link href="/tvh.css" rel="stylesheet" type="text/css" />
  <link href="/forms.css" rel="stylesheet" type="text/css" />-->

  <span class="form-required">*</span><span class="form-sub-label-container" style="font-family:Arial; font-size:12px; font-style:italic;"> Required Fields</span>
  <form  action="../forms-submit-box-at-top.php" method="post" name="medicareForm" id="medicareForm" accept-charset="utf-8">
    <input type="hidden" name="FormName" id="FormName" value="Free Insurance Checkup Request">
    <div class="form-all">
      <ul class="form-section">
        <li class="form-line jf-required" data-type="control_fullname" id="id_4">
          <label class="form-label form-label-top" id="label_4" for="input_4">
            <span class="form-required">
              *
            </span>
            Your Full Name
          </label>
          <div id="cid_4" class="form-input-wide jf-required">
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="30" name="q4_fullName4" id="first_4" title="Full Name" />
              <!--<label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height: 13px;"> Full Name </label>-->
            </span>
            <!--<span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="15" name="q4_fullName4[last]" id="last_4" title="Last Name"/>
              <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
            </span>-->
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_email" id="id_5">
          <label class="form-label form-label-top" id="label_5" for="input_5">
            <span class="form-required">
              *
            </span>
            Your E-mail
          </label>
          <div id="cid_5" class="form-input-wide jf-required">
            <input type="text" class=" form-textbox validate[required]" id="input_5" name="q5_email5" size="30" value="" title="EMail"/>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_phone" id="id_7">
          <label class="form-label form-label-top" id="label_7" for="input_7">
            <span class="form-required">
              *
            </span>
            Your Phone Number 
          </label>
          <div id="cid_7" class="form-input-wide jf-required">
           <!-- <span class="form-sub-label-container" style="vertical-align: top">
              <input class=" form-textbox validate[required]" type="text" name="q7_phoneNumber7[area]" id="input_7_area" size="3" title="Area Code">
              <span class="phone-separate">
                &nbsp;-
              </span>
              <label class="form-sub-label" for="input_7_area" id="sublabel_area" style="min-height: 13px;"> Area Code </label>
            </span>-->
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class=" form-textbox validate[required]" type="text" name="q7_phoneNumber7" id="input_7_phone" size="30" title="Phone">
              <label class="form-sub-label" for="input_7_phone" id="sublabel_phone" style="min-height: 13px;"> Enter numerals only. No “( )” or hyphens. </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_10">
          <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
              <span class="form-required">
                *
              </span>
              Which Care Center location will you be visiting?
          </label>
              <br><br><select class="form-label form-label-left form-label-auto" name="careCenter" id="careCenter" for="careCenter">
                <option value="">Choose A Location</option>
                <option value="Belleview">Belleview</option>
                <option value="Colony">Colony</option>
                <option value="Creekside">Creekside</option>
                <option value="Mulberry Grove">Mulberry Grove</option>
                <option value="Pinellas">Pinellas</option>
                <option value="Santa Barbara">Santa Barbara</option>
              </select>
          
        </li>
        <!--
        <li class="form-line jf-required" data-type="control_email" id="id_5">
          <label class="form-label form-label-top" id="label_5" for="input_5">
            If so, what is his or her name?
          </label>
          <div id="cid_5" class="form-input-wide jf-required">
            <input type="text" class=" form-textbox" id="input_5" name="WhoElse" size="30" value="" title="Who Else is Eligible"/>
          </div>
        </li>-->
        <li class="form-line" data-type="control_button" id="id_2">
          <div id="cid_2" class="form-input-wide">
            <div style="text-align:left" class="form-buttons-wrapper">
              <button type='submit' id="formSubmitButton" class="form-medicare-submit-button">
                Send Request!
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
