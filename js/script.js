$(document).ready(function() {
  $(".block.block-webformblock #webform-component-name label, \n\
      .block.block-webformblock #webform-component-mail label, \n\
      .block.block-webformblock #webform-component-phone label, \n\
      .block.block-webformblock #webform-component-email label").each(function() {
    $(this).html($(this).html().replace(": ",""));
    $(this).overlabel();
  });
  $(".block.block-webformblock select").each(function(){
    $(this).html($(this).html().replace("select...", ""));
  })
  $(".block.block-webformblock #webform-component-info .form-checkboxes input.form-checkbox").change(function() {
    var cbtoggle = $(this).val().toLowerCase();
    if ($(this).attr('checked')){
      $(".block.block-webformblock fieldset#webform-component-" + cbtoggle).addClass('form-required-fieldset');
    } else {
      $(".block.block-webformblock fieldset#webform-component-" + cbtoggle).removeClass('form-required-fieldset');
    }
  });
});
