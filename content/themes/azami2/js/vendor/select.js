jQuery(document).ready(function() {
    jQuery( ".menu-select" ).change(function() {
        window.location = jQuery(this).find("option:selected").val();
    });
    
    jQuery('.select-menu option[value=&quot;' + document.URL + '&quot;]').attr('selected','selected');
});