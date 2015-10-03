var testimonialOpts = {
  "mobile" : {
    "testimonial-sidebar" : {
      "load" : "click",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : course_code,
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "interstitial1" : {
      "load" : "none"
    }
  },
  "tablet" : {
    "testimonial-sidebar" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : course_code+",student",
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "interstitial1" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "horizontal",
      "categories" : course_code+",employer",
      "sliderOpts" : {
        "mode" : "horizontal",
        "adaptiveHeight" : false,
        "slideMargin" : 4
      }
    }
  },
  "desktop" : {
    "testimonial-sidebar" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : course_code+",student",
      "sliderOpts" : {
        "mode" : "vertical",
        "minSlides" : 2,
        "maxSlides" : 2
      }
    },
    "interstitial1" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "horizontal",
      "categories" : course_code+",employer",
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    }
  }
};
