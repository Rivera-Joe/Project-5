var MiniFAQ = MiniFAQ || {
  settings: {
    mobileRendermodeBreakpoint: 599, // px (make fair size bigger than one col b/p due to bug)
    oneColumnBreakpoint: 400,  //px
    widgetClass: ".Widget-MiniFAQ",
    twoColumnClass: "TwoCol",
    renderMode: "unknown",
    mobile: "m",
    desktop: "d"
  },

  init: function () {

    console.log("init fired");

    // Check if need to trigger mobile view based on viewport width
    this.settings.renderMode = this.getRenderMode();

    if (this.settings.renderMode == this.settings.mobile) {
      console.log("Viewport was too small, mobile view");
      return;
    }

    // Init each instance of MiniFAQ
    var faqs = $(this.settings.widgetClass);
    faqs.each(function (i, faq) { MiniFAQ.initFaq($(faq)); });

  },

  getRenderMode: function () {
    if ($(window).width() <= this.settings.mobileRendermodeBreakpoint) {
      return this.settings.mobile;
    }
    return this.settings.desktop;
  },

  initFaq: function (faq) {
    // hide all answers
    $(this.settings.widgetClass + " dd").hide();
    
    if (faq.width() > this.settings.oneColumnBreakpoint) {
      this.initTwoCol(faq);
    }
    else {
      this.initOneCol(faq);
    }
  },

  initOneCol: function (faq) {
    
    //faq.find(".status").remove();
    //faq.prepend("<p class=status>One Column</p>");
    
    // add links
    faq.find("dt").wrapInner("<a href='#void1'></a>");
    // add handlers
    faq.find('dl').on("click", "dt a", function (e) {
      $(this).parent().next("dd").toggle("fast");
      e.preventDefault();
    });
  },

  initTwoCol: function (faq) {
    
    //faq.find(".status").remove();
    //faq.prepend("<p class=status>Two Columns</p>");
    
    // apply styling
    faq.addClass(this.settings.twoColumnClass);
    
    var qs = faq.find("dt");
    // add question to top of each answer
    qs.each(function (i, e) {
      var q = $(e);
      q.next("dd").prepend("<h3 class='MiniFAQ-QuestionClone'>" + q.text() + "</h3>");
    });
    // add links after setting titles on answers
    qs.wrapInner("<a href='#void2'></a>");
    
    // apply delegated handlers to entire faq
    faq.find('dl').on("click", "dt a", function (e) {
      // hide all answers
      faq.find('dd').hide();
      faq.find('dt').removeClass("active");
      // show current answer
      var dt = $(this).parent();
      dt.addClass("active");
      dt.next("dd").show();
      e.preventDefault();
    });
    // set height of all absolutely positioned answers to match container
    faq.find('dd').height(faq.height()-5); 
    
    // if none are active, make first active
    if (faq.find('.active').length == 0) {
      faq.find("dt").first().addClass("active");
    } 
  },

  resize: function () {
    console.log("resize fired, width " + $(window).width());
    var newRenderMode = this.getRenderMode();
    if (this.settings.renderMode != newRenderMode) {
      console.warn("renderMode was '" + this.settings.renderMode + "' changed to '" + newRenderMode + "'");
      if (newRenderMode == this.settings.mobile) {
        this.reset();
      }
      this.init();
    }
  },

  // Reset funtion for when going from desktop to mobile render mode
  reset: function () {
    console.log("reset fired");
    var w = $(this.settings.widgetClass);
    w.removeClass(this.settings.twoColumnClass);
    // remove clones of question in answer for two column items
    w.find(".MiniFAQ-QuestionClone").remove();
    // reset height and show
    w.find("dd").height('auto').show();
    // remove links
    w.find("dt").each(function (i, e) {
      var dt = $(e);
      var text = dt.text();
      dt.empty();
      dt.append(text);
    });
    // remove handlers
    w.find("dl").off();
  }
};

$(window).ready(function () {
  MiniFAQ.init();
});

$(window).resize(function () {
  clearTimeout($(this).data('timer'));
  $(this).data('timer', setTimeout(function() {MiniFAQ.resize();}, 300));
});
