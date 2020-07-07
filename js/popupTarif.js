$(".pop-up-label").on("click", function(sourсe) {
  const label = $(this);
  const block = $(this).children('.pop-up-block');

  if (!block.is(sourсe.target)) {
    block.slideToggle(function() {
      if (block.is(":visible")) {
        $(document).bind('mouseup.hidePopUp', function(e) {
          if (!block.is(e.target) && block.has(e.target).length === 0) {
            $(document).unbind('mouseup.hidePopUp');
            if (!label.is(e.target)) block.slideToggle();
          }
        });
      }
    });
  }
});

$(".pop-up-superlabel").on("click", function(sourсe) {
  const label = $(this);
  const block = $(this).children('.pop-up-superblock');

  if (!block.is(sourсe.target)) {
    block.slideToggle(function() {
      if (block.is(":visible")) {
        $(document).bind('mouseup.hidePopUp', function(e) {
          if (!block.is(e.target) && block.has(e.target).length === 0) {
            $(document).unbind('mouseup.hidePopUp');
            if (!label.is(e.target)) block.slideToggle();
          }
        });
      }
    });
  }
});