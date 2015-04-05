<script>
{literal}

cj(document).ready(function($) {
    console.log( "bikemddiscounts ready!" );

   // relocate discount code
   $("#discountcode").closest("table").insertBefore(".credit_card_info-group");

   // THE FOLLOWING IS PURE EVIL.  For some reason, the styling on the CiviDiscount 
   // label for the discount code is wacky. We want the label to look like everything
   // else on the page.  So, we're just copying specific style elements from a 
   // neighboring label.  THIS FEELS DIRTY AND I'M ASHAMED TO DO THIS.  Time permitting
   // it should be replaced.

   $('label[for="discountcode"]').css("font-size", 
      $('label[for="credit_card_number"]').css("font-size"));
   $('label[for="discountcode"]').css("white-space", 
      $('label[for="credit_card_number"]').css("white-space"));
   $('label[for="discountcode"]').css("color", 
      $('label[for="credit_card_number"]').css("color"));


   // hide the discount code 'Apply' button.  When the user inserts a discount code
   // *before* providing a credit card number in the Stripe box an error appears 
   // that complains about invalid credit card number.  Remvoe the apply button so 
   // that the form isn't submitted until they apply all the info
   $("#_qf_Register_reload").hide();

});

{/literal}
</script>


