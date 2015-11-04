var testimonialOpts = {
  "mobile" : {
    "testimonial-sidebar-1" : {
      "load" : "none"
    },
    "testimonial-sidebar-2" : {
      "load" : "none"
    },
    "testimonial-interstitial-1" : {
      "load" : "none"
    },
    "testimonial-interstitial-2" : {
      "load" : "none"
    },
    "testimonial-bottom" : {
      "load" : "click",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : [course_code],
      "sliderOpts" : {
        "mode" : "horizontal",
        "slideMargin" : 2
      }
    }
  },
  "tablet" : {
    "testimonial-sidebar-1" : {
      "load" : "none"
    },
    "testimonial-sidebar-2" : {
      "load" : "none"
    },
    "testimonial-interstitial-1" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "horizontal",
      "categories" : [course_code+",employer"],
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "testimonial-interstitial-2" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "horizontal",
      "categories" : [course_code+",student"],
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "testimonial-bottom" : {
      "load" : "none"
    }
  },
  "desktop" : {
    "testimonial-sidebar-1" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : [course_code+",employer"],
      "sliderOpts" : {
        "mode" : "horizontal"
        //"mode" : "vertical"
      }
    },
    "testimonial-sidebar-2" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : [course_code+",student"],
      "sliderOpts" : {
        "mode" : "horizontal"
        //"mode" : "vertical"
      }
    },
    "testimonial-interstitial-1" : {
      "load" : "none"
    },
    "testimonial-interstitial-2" : {
      "load" : "none"
    },
    "testimonial-bottom" : {
      "load" : "none"
    }
  }
};

var imageOpts = {
  "mobile" : {
    "image-placeholder-1" : {
      "load" : "none"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  },
  "tablet" : {
    "image-placeholder-1" : {
      "load" : "none"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  },
  "desktop" : {
    "image-placeholder-1" : {
      "load" : "auto"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  }
};
