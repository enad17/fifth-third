<!-- alternate entry -->
<div class="modal" id="alternateEntry-modal">
  <h2>Fifth Third Bank Holiday Payback Sweepstakes</h2>
  <h3>Alternate Entry</h3>
  <a class="officialRules" href="#">>> Official Rules</a>
  <form id="sweepStakesForm" method="POST" action="<?php echo get_template_directory_uri(); ?>/doFormSubmit.php">
    <div class="field">
      <label for="first_name">First Name:</label>
      <input name="first_name" type="text" required />
    </div>

    <div class="field">
      <label for="last_name">Last Name:</label>
      <input name="last_name" type="text" required />
    </div>

    <div class="field">
      <label for="address">Address:</label>
      <input name="address" type="text" class="two-col" required />
    </div>    

    <div class="field">
      <label for="city">City:</label>
      <input name="city" type="text" style="width: 169px;" required />
    </div>

    <div class="field">
      <label for="state" style="width:60px;">State:</label>
      <input name="state" type="text" class="three-col" style="width: 35px;" required />
    </div>

    <div class="field">
      <label for="zip">Zip Code:</label>
      <input name="zip" type="text" class="three-col" required />
    </div>

    <div class="field">
      <label for="phone">Phone:</label>
      <input name="phone" type="text" class="even" required />
    </div>

    <div class="field">
      <label for="email" style="width: 60px;">Email:</label>
      <input name="email" type="email" style="width: 208px;" required />
    </div>         

    <div class="field">
      <p class="label">Are you a fifth third bank customer?</p>
      <div class="radio">
        <input id="yes" value="yes" type="radio" name="customer" required />
        <label for="yes">Yes</label>
     </div>
      <div class="radio">
        <input id="no" value="no" type="radio" name="customer" required />
        <label for="no">No</label>
     </div>     
    </div>

    <div class="field">
      <p class="label" style="width: 315px;">PLEASE PLACE THIS ENTRY INTO THE <span>(SELECT ONE)</span></p>
      <div class="radio big">
        <input id="credit" value="credit" type="radio" name="type" required />
        <label for="credit">Credit</label>
     </div>
      <div class="radio big">
        <input id="debit" value="debit" type="radio" name="type" required />
        <label for="debit">Debit</label>
     </div>     
      <p class="label" style="width: 150px;">PORTION OF THE SWEEPSTAKES.</p>
    </div>    

    <div class="field" style="clear:both;">
      <input name="accept" type="checkbox" required />
      <p style="margin-right: 15px;font-size: 10px;">BY CLICKING SUBMIT, I AGREE TO THE <a class="officialRules" href="#">OFFICIAL RULES</a> OF THIS SWEEPSTAKES</p>
      <button type="submit">Submit</button>
    </div>

    <div class="field" style="width:100%;">
      <p class="required">ALL FIELDS ARE REQUIRED</p>
    </div>

    <div class="success" style="display: none;"><p>Form Sent yay</p></div>

  </form>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.form.js"></script> 
  <script> 
      // wait for the DOM to be loaded 
      $(document).ready(function() { 
          // bind 'sweepStakesForm' and provide a simple callback function 
          $('#sweepStakesForm').ajaxForm(function() {
            $('#sweepStakesForm')[0].reset();

            // hide our form modal
            $.modal.close();

            // show the success moda
            setTimeout(function () { // wait for 3/10ths of a second, then open the next dialog
              $('#sweepStakesConfirm-modal').modal({
                onShow: function (dialog) {
                  dialog.container.css("height", "auto");
                }              
              });
            }, 350);

          });
      }); 
  </script>  
</div>

<!-- official rules -->
<div class="modal" id="officialRules-modal">
  <ul class="tabs">
      <li class="selected"><a href="#credit">Credit</a></li>
      <li class="sep">|</li>
      <li><a href="#debit">Debit</a></li>
      <li class="sep">|</li>
      <li><a href="#facebook">Facebook</a></li>
      <li class="sep">|</li>
      <li><a href="#twitter">Twitter</a></li>
      <!-- ... -->
  </ul>
  <div class="tab" id="credit">
    <div class="rules-container">
      <?php include('credit-rules.php'); ?>
    </div>
  </div>

  <!-- debit -->
  <div class="tab" id="debit">
    <div class="rules-container">
      <?php include('debit-rules.php'); ?>
    </div>
  </div>

  <!-- facebook -->
  <div class="tab" id="facebook">
    <div class="rules-container">
      <?php include('facebook-rules.php'); ?>
    </div>
  </div>  

  <!-- twitter -->
  <div class="tab" id="twitter">
    <div class="rules-container">
      <?php include('twitter-rules.php'); ?>
    </div>
  </div>   
</div>

<!-- privacy policy rules -->
<div class="modal" id="privacyPolicy-modal">
  <p>privacyPolicy</p>
</div>

<!-- twitter sweepstakes -->
<div class="modal" id="twitterSweepstakes-modal">
  <h2>twitter Sweepstakes</h2>
  <p>Join us on Twitter between November 21 and November 26 for a chance to win!</p>

  <h2>how Do You Enter?</h2>
  <p><strong>Step One:</strong> <a class="notModal" href="https://twitter.com/intent/user/?screen_name=FifthThird">Follow @Fifth Third</a> on Twitter.</p>


  <p><strong>Step Two:</strong> Tweet the following between 11/21 and 11/26:</p>
  <p class="indent">RT 4 chance 2 win a $100 Fifth Third Bank Gift Card. Follow @Fifth Third for #HolidayPayback info. More at bit.ly/RetCAP. </p>
    
  <p><strong>Step Three:</strong> Tweet every day for more chances to win!</p>

  <h2>what Could You Win?</h2>
  <p>Each day, we’ll select <strong>5 followers</strong> to win a <strong>$100 Fifth Third Bank Gift Card!</strong></p>

  <a class="officialRules" id="officialRules" href="#">>> Official Rules</a>

</div>

<!-- facebook sweepstakes -->
<div class="modal" id="facebookSweepstakes-modal">
  <h2>FACEBOOK SWEEPSTAKES</h2>
  <p>Join us on Facebook every Friday &mdash; November 9, 2012 through December 28, 2012 for a chance to win great prizes.</p>

  <h2>HOW DO YOU ENTER?</h2>
  <p><strong>Step One:</strong> Like us on Facebook at <a href="http://facebook.com/FifthThirdBank">facebook.com/FifthThirdBank</a></p>

  <p><strong>Step Two:</strong> Click on the “Fifth Third Bank Holiday Payback tab” or <a href="https://www.facebook.com/FifthThirdBank/app_117825708370606" target="_blank">click here</a></p>
  
  <p><strong>Step Three:</strong> Provide an answer, right or wrong, to our weekly question and you’ll receive an entry for that week’s prize.</p>

  <h2>WHAT COULD YOU WIN?</h2>
  <p>Each week, we’ll be selecting one (1) winner to win great prizes like iPads, Keurigs, and other great stuff!</p>

  <a class="officialRules" href="#">>> Official Rules</a>

  <p class="sub">iPad® is a registered trademark of Apple Inc. All rights reserved. Apple is not a participant in or sponsor of this promotion. "Keurig"® and is a registered trademark of Keurig Incorporated. Keurig is not a participant in or sponsor of this promotion.</p>
</div>

<!-- "see details" -->
<div class="modal" id="seeDetails-modal">
  <h2>PUT THE WIN IN WINTER</h2>
  <p>Every time you use your credit or debit card you’re automatically entered to win!</p>

  <h2>WHAT IS IT?</h2>
  <p>Our way of saying thanks to our customers by giving them a chance to win a “holiday payback” up to $2,000 just for using their credit or debit card this holiday season.</p>

  <h2>HOW DO YOU ENTER?</h2>
  <p>Simply use your Fifth Third Bank credit or debit card on Black Friday, Cyber Monday, or any other day between 11/1/12 and 12/30/12. Every qualifying purchase is one entry for a chance to win.</p>

  <h2>WHAT COULD YOU WIN?</h2>
  <p>We’ll be selecting 100 customers to win a “holiday payback” – a statement credit for every card purchase made that day – up to $2,000.</p>

  <p class="larger">The more you use your card, the more chances to win, and the bigger the payback!</p>

  <a class="officialRules" id="officialRules">>> Official Rules</a>
</div>

<!-- sweep stakes submit confirmation -->
<div class="modal" id="sweepStakesConfirm-modal">
  <div class="centered">
    <h2>Fifth Third Bank Holiday Payback Sweepstakes</h2>
    <div class="thanks">Thank You!</div>
    <p class="largest" style="margin-bottom: 40px;">Your entry has been received.</p>
    <p class="largest">Don’t forget to like us on <strong>FACEBOOK</strong><br /> or follow us on <strong>twitter</strong> for even more chances to win!</p>

    <div class="social">
      <a href="http://facebook.com/FifthThirdBank" target="_blank" class="sprite-facebook-icon"></a>
      <a href="https://twitter.com/intent/user/?screen_name=FifthThird" class="sprite-twitter-icon"></a>
    </div>
  </div>
</div>