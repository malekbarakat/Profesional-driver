// creating an array and passing the number, questions, options, and answers
let questions = [


  {
    numb: 1,
    question: "في الصورة التي امامك ھل تتجاوز المركبة الزرقاء بشكل صحیح",
    answer: "نعم",
    img: "images/1.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 2,
    question: "في الصورة التي امامك وقوف المركبة صحیح",
    answer: "نعم",
    img: "images/2.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 3,
    question: "في الصورة التي امامك یجب على المركبة رقم ( ١) اخذ اقصى الیمین",
    answer: "نعم",
    img: "images/3.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 4,
    question: "في الصورة التي امامك تقف المركبة الصفراء في المكان الصحیح",
    answer: "نعم",
    img: "images/4.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 5,
    question: "إذا كانت المركبة التي امامك تقف على منحدر فإن وضعیة عجلات المركبة تكون كما في الشكل",
    answer: "نعم",
    img: "images/5.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 6,
    question: "في الصورة التي امامك ھل تصرف المركبة الزرقاء صحیح",
    answer: "لا",
    img: "images/6.webp",
    options: ["نعم",
      "لا"],
  },

  {
    numb: 7,
    question: "في الصورة التي امامك وقوف المركبات صحیح",
    answer: "نعم",
    img: "images/7.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 8,
    question: "في الصورة التي امامك المركبة رقم ( ٢ ) یعتبر تجاوزھا صحیحا",
    answer: "لا",
    img: "images/8.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 9,
    question: "في الصورة التي امامك الى یرید السائق",
    answer: "تخفیف السرعة",
    img: "images/9.webp",
    options: ["التوجه الى الیمین",
      "التوجه الى الیسار", "تخفیف السرعة"],
  },


  {
    numb: 10,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "للمركبة رقم ( ٢ )",
    img: "images/10.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },


  {
    numb: 11,
    question: "السیارة الزرقاء بحسب الرسم تأخذ المسرب الصحیح",
    answer: "نعم",
    img: "images/11.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 12,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "للمركبة رقم ( ١ )",
    img: "images/12.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },


  {
    numb: 13,
    question: "في الصورة التي امامك التصرف الذي تقوم به المركبة صحیح",
    answer: "لا",
    img: "images/13.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 14,
    question: "في الصورة التي امامك وقوف المركبة صحیح",
    answer: "لا",
    img: "images/14.webp",
    options: ["نعم",
      "لا"],
  },

  {
    numb: 15,
    question: "استخدام الضوء الرباعي (الفلشر) یعني",
    answer: "تخفیف السرعة یوجد خطر أمامك",
    img: "images/15.webp",
    options: ["التوجه الى الیمین",
      "التوجه الى الیسار", "تخفیف السرعة یوجد خطر أمامك"],
  },


  {
    numb: 16,
    question: "في الصورة التي امامك الوقوف صحیح",
    answer: "نعم",
    img: "images/16.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 17,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "للمركبة رقم ( ٢ )",
    img: "images/17.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },

  {
    numb: 18,
    question: "في الصورة التي امامك المركبة الصفراء تتجاوز بشكل صحیح",
    answer: "لا",
    img: "images/18.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 19,
    question: "في الصورة التي امامك المركبة الزرقاء تتجاوز بشكل صحیح",
    answer: "نعم",
    img: "images/19.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 20,
    question: "الإجراء الذي یجب ان یقوم به سائق المركبة رقم (١)",
    answer: "تخفیف السرعة وإتخاذ اقصى الیمین",
    img: "images/20.webp",
    options: ["تخفیف السرعة وإتخاذ اقصى الیمین",
      "زیادة السرعة وإتخاذ اقصى الیمین"],
  },


  {
    numb: 21,
    question: "في الصورة التي امامك وقوف المركبة رقم ( ١ ) صحیح",
    answer: "لا",
    img: "images/21.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 22,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "للمركبة رقم ( ٢ )",
    img: "images/22.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },


  {
    numb: 23,
    question: "في الصورة التي امامك التصرف الذي تقوم به المركبة صحیح",
    answer: "لا",
    img: "images/23.webp",
    options: ["نعم",
      "لا"],
  },

  {
    numb: 24,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "للمركبة رقم ( ٢ )",
    img: "images/24.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },


  {
    numb: 25,
    question: "في الصورة التي امامك المركبة الزرقاء تتجاوز بشكل صحیح",
    answer: "لا",
    img: "images/25.webp",
    options: ["نعم",
      "لا"],
  },

  {
    numb: 26,
    question: "في الصورة التي امامك یجب على المركبة الصفراء",
    answer: "التوقف للإفساح للشاحنة بالالتفاف",
    img: "images/26.webp",
    options: ["الالتفاف إلى الیمین",
      "التوقف للإفساح للشاحنة بالالتفاف"],
  },

  {
    numb: 27,
    question: "في الصورة التي امامك وقوف المركبة صحیح",
    answer: "لا",
    img: "images/27.webp",
    options: ["نعم",
      "لا"],
  },


  {
    numb: 28,
    question: "في الصورة التي امامك تكون الاولویة",
    answer: "",
    img: "images/28.webp",
    options: ["للمركبة رقم ( ١ )",
      "للمركبة رقم ( ٢ )"],
  },


  {
    numb: 29,
    question: "عند رؤیة ھاتین الشاخصتین فإنه",
    answer: "یمنع الإنعطاف للیسار ویمنع الدوران",
    img: "images/29.webp",
    options: ["یمنع الدوران ویسمح الإنعطاف للیسار",
      "یمنع الإنعطاف للیسار ویمنع الدوران", "یسمح الدوران ویمنع الإنعطاف للیسار"],
  },


  {
    numb: 30,
    question: "عند رؤیة ھاتین الشاخصتین فإن",
    answer: "الالتفاف مسموح والانعطاف إلى الیسار ممنوع",
    img: "images/30.webp",
    options: ["الانعطاف للیمین ممنوع",
      "السیر الى الأمام إلزامي", "الالتفاف مسموح والانعطاف إلى الیسار ممنوع"],
  },


  {
    numb: 31,
    question: "عند وجود ھذه الشاخصة فإنه",
    answer: "یمنع مرور الشاحنات",
    img: "images/31.jpg",
    options: ["یمنع مرور الشاحنات",
      "یسمح بمرور الشاحنات في اوقات المساء فقط", "یمنع مرور المركبات"],
  },


  {
    numb: 32,
    question: "عند الاقتراب من ھذه الشاخصة",
    answer: "یجب إعطاء الأولویة للمركبات بالمرور",
    img: "images/32.webp",
    options: ["یجب التوقف والسماح للمركبات بالمرور",
      "یجب إعطاء الأولویة للمركبات بالمرور"],
  },


  {
    numb: 33,
    question: "عند وجود ھذه الشاخصة فإنه",
    answer: "على السائق عدم الوقوف والتوقف نھائیاً",
    img: "images/33.jpg",
    options: ["على السائق عدم الوقوف والتوقف نھائیاً",
      "على السائق عدم التوقف إلا إذا كان یقوم بعملیة تحمیل وتنزیل الركاب", "یسمح بالتوقف دون الوقوف"],
  },


  {
    numb: 34,
    question: "عند رؤیتك لھذه الشاخصة فإنة یجب علیك",
    answer: "عدم المرور إذا كان إرتفاع مركبتك اكثر من ٤٫٧ متر",
    img: "images/34.webp",
    options: ["عدم المرور إذا كان إرتفاع مركبتك اقل ٤٫٧ متر", "المرور بحذر إذا كان إرتفاع مركبتك اكثر من ٤٫٧ متر",
      "عدم المرور إذا كان إرتفاع مركبتك اكثر من ٤٫٧ متر"],
  },


  {
    numb: 35,
    question: "عند رؤیتك لھذه الأزرار فإنه",
    answer: "لا یسمح لك بالمرور علیھا",
    img: "images/35.webp",
    options: ["لا یسمح لك بالمرور علیھا",
      "یسمح لك بالمرور علیھا", "یسمح لك بالمرور علیھا لكن بشروط"],
  },


  {
    numb: 36,
    question: "عند وجود ھذه الشاخصة یجب على المشاة",
    answer: "عدم المرور",
    img: "images/36.webp",
    options: ["المرور لكن بحذر",
      "عدم المرور", "المرور لأنھم یملكون الأولویة"],
  },

  {
    numb: 37,
    question: "من خلال الصورة المبینة فإنة یجب علیك",
    answer: "ب+ج",
    img: "images/37.webp",
    options: ["المرور بحذر لأنك تقترب من منطقة عمل على بعد ٥٠ م",
      "المرور بحذر لأنك تقترب من منطقة عمل",
      "ان لاتزید من سرعة مركبتك عن ٥٠ كم/ساعة",
      "ب+ج"],
  },

  {
    numb: 38,
    question: "عند رؤیة ھذه الشاخصة فإنه",
    answer: "یسمح لك بالوقوف",
    img: "images/38.webp",
    options: ["یسمح لك بالوقوف",
      "لا یسمح لك بالوقوف", "یسمح بالوقوف لذوي الاحتیاجات الخاصة فقط"],
  },


  {
    numb: 39,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "أمامك سكة حدید مع حاجز",
    img: "images/39.webp",
    options: ["أمامك سكة حدید مع حاجز",
      "امامك سكة حدید دون حاجز", "امامك قطار"],
  },

  {
    numb: 40,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "مطب",
    img: "images/40.jpg",
    options: ["انخفاض في مستوى الطریق",
      "مطب", "طریق غیر مستوي"],
  },

  {
    numb: 41,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منعطف للیسار",
    img: "images/41.jpg",
    options: ["منعطف خطر",
      "منعطف للیمین", "منعطف للیسار"],
  },

  {
    numb: 42,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "وجود طلاب مدارس",
    img: "images/42.webp",
    options: ["ممر مشاة",
      "وجود طلاب مدارس", "أمامك مدرسة"],
  },

  {
    numb: 43,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "تساقط حجارة من الیسار",
    img: "images/43.webp",
    options: ["تساقط حجارة من الیمین",
      "تساقط حجارة من الیسار", "طریق خطر"],
  },

  {
    numb: 44,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "تضیق الطریق من جھتین",
    img: "images/44.jpg",
    options: ["تضیق الطریق من جھتین",
      "تضیق خطر", "امامك جسر"],
  },

  {
    numb: 45,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منعطف للیمین",
    img: "images/45.jpg",
    options: ["منعطف خطر",
      "منعطف للیمین", "منعطف للیسار"],
  },

  {
    numb: 46,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "طریق زلقة",
    img: "images/46.jpg",
    options: ["طریق زلقة",
      "تناثر حصى", "اكتاف خطرة"],
  },

  {
    numb: 47,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممر او مدخل دراجات",
    img: "images/47.jpg",
    options: ["ممر مشاة",
      "أطفال", "ممر او مدخل دراجات"],
  },


  {
    numb: 48,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "تضیق الطریق من الیسار",
    img: "images/48.jpg",
    options: ["تضیق خطر",
      "تضیق الطریق من الیسار", "تضیق الطریق من الیمین"],
  },


  {
    numb: 49,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممر مشاة",
    img: "images/49.jpg",
    options: ["ممر مشاة",
      "وجود أطفال", "ممنوع المرور"],
  },


  {
    numb: 50,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "طریق ذو اتجاھین",
    img: "images/50.jpg",
    options: ["طریق مفصول",
      "أمامك طریق مفصول بجزیرة وسطیة", "طریق ذو اتجاھین"],
  },


  {
    numb: 51,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "طریق ذو اتجاھین",
    img: "images/51.webp",
    options: ["طریق مفصول",
      "أمامك طریق مفصول بجزیرة وسطیة", "طریق ذو اتجاھین"],
  },


  {
    numb: 52,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "تضیق جسر",
    img: "images/52.webp",
    options: ["تضیق الطریق من جھتین",
      "تضیق جسر", "تضیق الطریق من الیمین"],
  },


  {
    numb: 53,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "طریق غیر مستوي",
    img: "images/53.jpg",
    options: ["طریق غیر مستوي",
      "مطب", "انخفاض في مستوى الطریق"],
  },


  {
    numb: 54,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منحدر حاد",
    img: "images/54.webp",
    options: ["منحدر خطر",
      "منحدر حاد", "مرتفع حاد"],
  },


  {
    numb: 55,
    question: "",
    answer: "طریق ینتھي إلى رصیف بحر او نھر",
    img: "images/55.webp",
    options: ["طریق غیر مستوى",
      "أمامك شاطئ بحر", "طریق ینتھي إلى رصیف بحر او نھر"],
  },


  {
    numb: 56,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منعطف للیمین",
    img: "images/56.jpg",
    options: ["منعطف للیسار",
      "منعطف خطر", "منعطف للیمین"],
  },


  {
    numb: 57,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "وجود طلاب مدارس",
    img: "images/57.webp",
    options: ["أمامك مدرسة",
      "وجود طلاب مدارس", "ممر مشاة"],
  },


  {
    numb: 58,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "مرتفع حاد",
    img: "images/58.jpg",
    options: ["مرتفع حاد",
      "منحدر خطر", "منحدر حاد"],
  },


  {
    numb: 59,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منعطفات اولھا للیمین",
    img: "images/59.jpg",
    options: ["منعطفات خطرة",
      "منعطفات اولھا للیمین", "منعطفات اولھا للیسار"],
  },


  {
    numb: 60,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "تضیق الطریق من الیسار",
    img: "images/60.jpg",
    options: ["تضیق الطریق من الیسار",
      "تضیق الطریق من الیمین", "تضیق خطر"],
  },


  {
    numb: 61,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "منعطفات اولھا للیسار",
    img: "images/61.jpg",
    options: ["منعطفات خطرة",
      "منعطفات اولھا للیمین", "منعطفات اولھا للیسار"],
  },


  {
    numb: 62,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "مقطع سكة حدید(خط واحد)",
    img: "images/62.webp",
    options: ["أمامك سكة حدید مع حاجز",
      "مقاطع سكة حدید على أبعاد مختلفة من التقاطع", "مقطع سكة حدید(خط واحد)"],
  },


  {
    numb: 63,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع مرور المركبات التي یزید طولھا عن ١٢ م",
    img: "images/63.webp",
    options: ["ممنوع مرور المركبات التي یزید طولھا عن ١٢ م",
      "ممنوع مرور المركبات التي یزید ارتفاعھا عن ١٢ م", "ممنوع مرور المركبات التي یزید عرضھا عن ١٢ م"],
  },


  {
    numb: 64,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "أفضلیة المرور لك",
    img: "images/64.jpg",
    options: ["طریق رئیسي",
      "أفضلیة المرور لك", "نھایة طریق رئیسي"],
  },


  {
    numb: 65,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع الانعطاف إلى الیمین",
    img: "images/56.jpg",
    options: ["مسموح الانعطاف الى الیمین",
      "ممنوع الانعطاف إلى الیسار", "ممنوع الانعطاف إلى الیمین"],
  },


  {
    numb: 66,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع التجاوز للشاحنات",
    img: "images/66.webp",
    options: ["ممنوع التجاوز للشاحنات",
      "نھایة منطقة منع التجاوز", "ممنوع التجاوز"],
  },


  {
    numb: 67,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع مرور المركبات التي یزید ارتفاعھا عن ٣٫٥ م",
    img: "images/67.webp",
    options: ["ممنوع مرور المركبات التي یزید طولھا عن ٣٫٥ م",
      "ممنوع مرور المركبات التي یزید ارتفاعھا عن ٣٫٥ م", "ممنوع مرور المركبات التي یزید عرضھا عن ٣٫٥ م"],
  },


  {
    numb: 68,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع التجاوز",
    img: "images/68.jpg",
    options: ["ممنوع التجاوز",
      "ممنوع التجاوز للشاحنات", "نھایة منطقة منع التجاوز"],
  },


  {
    numb: 69,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "أمامك دوار",
    img: "images/69.jpg",
    options: ["أمامك دوار",
      "طریق خطر", "خفض السرعة"],
  },


  {
    numb: 70,
    question: "ھذه الشاخصة التحذیریة تعني",
    answer: "ممنوع الدوران",
    img: "images/70.jpg",
    options: ["مسموح الدوران",
      "ممنوع الدوران", "ممنوع الانعطاف إلى الیسار"],
  },
  // you can uncomment the below codes and make duplicate as more as you want to add question
  // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];
