var testimonialOpts = {
  "mobile" : {
    "testimonial-sidebar-1" : {
      "load" : "none"
    },
    "testimonial-sidebar-2" : {
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
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
      "categories" : [course_code+",employer"],
      "sliderOpts" : {
        "mode" : "horizontal"
      }
    },
    "testimonial-sidebar-2" : {
      "load" : "auto",
      "num" : 0,
      "orientation" : "vertical",
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
    "testimonial-bottom" : {
      "load" : "none"
    }
  }
};