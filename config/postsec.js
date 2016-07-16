$FRvars.testimonialOpts = {
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
      "categories" : [$FRvars.coursecode],
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
      "categories" : [$FRvars.coursecode+",employer"],
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "testimonial-interstitial-2" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "horizontal",
      "categories" : [$FRvars.coursecode+",student"],
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
      "categories" : [$FRvars.coursecode+",employer"],
      "sliderOpts" : {
        "mode" : "horizontal"
        //"mode" : "vertical"
      }
    },
    "testimonial-sidebar-2" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : [$FRvars.coursecode+",student"],
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

$FRvars.imageOpts = {
  "mobile" : {
    "subheader-image" : {
      "load" : "none"
    },
    "image-placeholder-1" : {
      "load" : "none"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  },
  "tablet" : {
    "subheader-image" : {
      "load" : "auto"
    },
    "image-placeholder-1" : {
      "load" : "none"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  },
  "desktop" : {
    "subheader-image" : {
      "load" : "auto"
    },
    "image-placeholder-1" : {
      "load" : "auto"
    },
    "image-placeholder-2" : {
      "load" : "none"
    }
  }
};
