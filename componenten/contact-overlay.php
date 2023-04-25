<div id="contact-modal" class="overlay-contact fixed">
    <div class="flex h-screen justify-center items-center">
        <div class="w-[328px] md:w-[647px] xl:w-[686px] bg-black min-h-[580px] md:min-h-[537px] xl:min-h-[569px] overflow-scroll">
            <div class="form-header flex justify-end w-full">
                <button class="button-close pt-2 pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.583" height="18.583" viewBox="0 0 18.583 18.583">
                        <path id="close" d="M10.994,9.427,18.23,2.191a1.2,1.2,0,0,0-1.7-1.7L9.292,7.725,2.056.489a1.2,1.2,0,0,0-1.7,1.7L7.589,9.427.353,16.664a1.2,1.2,0,1,0,1.7,1.7L9.292,11.13l7.236,7.236a1.2,1.2,0,0,0,1.7-1.7Zm0,0" transform="translate(0 -0.136)" fill="#fff"/>
                    </svg>
                </button>
            </div>
            <div class="form-titel">
                <h2 class="text-30 leading-39 md:text-30 md:leading-39 xl:text-35 xl:leading-44 font-space text-white uppercase font-bold text-center pt-2">Contact</h2>
            </div>
            <div class="form-gravity flex justify-center w-full py-4 xl:py-5">
                <div class="w-[255px] md:w-[354px] xl:w-[374px]">
                     
					<?php if(ICL_LANGUAGE_CODE=='en'): ?><?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"] '); ?><?php elseif(ICL_LANGUAGE_CODE=='nl'): ?><?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"] '); ?><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="overlay-contact-background"></div>

<script>
  document.addEventListener( 'gform_confirmation_loaded', function( event, formId ) {
console.log("object");
    console.log(formId);
    // Check if the form ID is the one you want to trigger the modal for
    if(formId == 1) {
      // Show the modal
      document.getElementById( 'contact-modal' ).style.display = 'block';
    }
  }, false );
</script>