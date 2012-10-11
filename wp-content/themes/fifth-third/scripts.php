<script>
  $.extend($.modal.defaults, {
    minWidth: 750,
    minHeight: 400,        
    overlayClose: true,    
    closeClass: "modalClose",
    closeHTML: "<a href='#'>X</a>"
  });
  $(function() {

    // callback function
    function modalOnShow(dialog) {
      var s = this; // refers to the simplemodal object

      $('a:not(".tabs a")', dialog.data[0]).click(function () { // use the modal data context
        var id = '#' + this.className + '-modal'; // dynamically determine the modal content id based on the link id
        s.close(); // close the current dialog

        setTimeout(function () { // wait for 3/10ths of a second, then open the next dialog
          $(id).modal({
            overlayClose: true,
            onShow: modalOnShow,
            onOpen: modalOpen,
            onClose: modalClose
          });
        }, 350);

        return false;
      });
    }

    // callback function
    function modalOpen(dialog) {

      // if we're opening the rules modal, we initialize the tabs
      if (dialog.data[0].id == "officialRules-modal") {
        $('.tabs').tabs();
      }
      dialog.overlay.fadeIn(200);
      dialog.data.hide();
      dialog.container.fadeIn(100);
      dialog.data.fadeIn(100);
    }

    // callback function
    function modalClose(dialog){
      dialog.data.fadeOut(100);
      dialog.container.fadeOut(100);
      dialog.overlay.fadeOut(200, function () {
        $.modal.close();
      });
    } 

    $('footer .links a').on('click', function(e) {
      e.preventDefault();
      var modalToOpen = "#" + $(this).attr('data-name') + '-modal';
      console.log(modalToOpen);
      $(modalToOpen).modal({
        onShow: modalOnShow,
        onOpen: modalOpen,
        onClose: modalClose
      });
      return false;
    });


  });
</script>