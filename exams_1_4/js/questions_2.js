// creating an array and passing the number, questions, options, and answers
let questions = [
  {
    numb: 1,
    question: "من الامور التى تساعد على تقلیل مصادر شرود الذھن والتي تساعد على التقلیل من إرتكاب حوادث",
    answer: "عدم إستخدام الھاتف المتنقل أثناء القیادة",
    options: [
      "إستخدام الھاتف اثناء القیادة",
      "محاولة تشغیل الرادیو أو الكاسیت أثناء القیادة",
      "عدم إستخدام الھاتف المتنقل أثناء القیادة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 2,
    question: "من الاسباب الرئیسیة لوقوع الحوادث المروریة؟",
    answer: "جمیع ما ذكر",
    options: [
      "عدم الانتباه",
      "خلل فني في المركبة",
      "اسالیب خاطئة اثناء السوق",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 3,
    question: "لتجنب الشعور بالارھاق اثناء القیادة یجب علیك كسائق اتباع ما یلي؟",
    answer: "ایقاف المركبة واخذ قسط من الراحة",
    options: [
      "متابعة السیر عند الشعور بالارھاق",
      "ایقاف المركبة واخذ قسط من الراحة",
      "تناول الاطعمة الدسمة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 4,
    question: "من العوامل التي تتأثر فيها مسافة وقوف المركبة؟",
    answer: "جميع ما ذكر",
    options: [
      "حالة الفرامل (البريكات)",
      "زمن ردة فعل السائق",
      "تصميم المركبة",
      "جميع ما ذكر",
    ],
  },


  {
    numb: 5,
    question: "من أجل الحصول على تعبئة وقود آمنة يجب؟",
    answer: "جميع ما ذكر",
    options: [
      "إطفاء المحرك",
      "عدم التدخين",
      "عدم استخدام الهاتف المتنقل، وتركه داخل السيارة أو إغلاقه",
      "جميع ما ذكر",
    ],
  },


  {
    numb: 6,
    question: "من العوامل التي تتأثر فيها مسافة وقوف المركبة؟",
    answer: "جميع ما ذكر",
    options: [
      "حالة الفرامل (البريكات)",
      "زمن ردة فعل السائق",
      "تصميم المركبة",
      "جميع ما ذكر",
    ],
  },


  {
    numb: 7,
    question: "من أهم وسائل الحماية المتوفرة في السيارة؟",
    answer: "جميع ما ذكر",
    options: [
      "الوسادة الهوائية (Air Bag)",
      "مسند الرأس",
      "حزام الأمان",
      "جميع ما ذكر",
    ],
  },


  {
    numb: 8,
    question: "من أكثر مستخدمي الطريق المعرضون للخطر؟",
    answer: "جميع ما ذكر",
    options: [
      "المشاة",
      "راكبوا الدرجات الهوائية",
      "راكبوا الدراجات الآلية",
      "جميع ما ذكر",
    ],
  },


  {
    numb: 9,
    question: "على الراكب الجالس بجوار السائق",
    answer: "استخدام حزام الأمان لانه ملزم قانونيا",
    options: [
      "استخدام حزام الأمان لانه ملزم قانونيا",
      "إستخدام حزام الأمان إذا اراد ذلك",
      "عدم استخدام حزام الامان اذا كان یقید حریته",
      "لاشئ مما ذكر",
    ],
  },


  {
    numb: 10,
    question: "من وظائف الاطارات الرئیسیة؟",
    answer: "جمیع ما ذكر",
    options: [
      "متصاص الصدمات من الطریق",
      "رفع الأحمال",
      "نقل عملیة الدفع والفرملة على الطریق",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 11,
    question: "ماذا تشتمل الإشارة الضوئية الخاصة بالسماح بعبور المشاة؟",
    answer: "إشارة ضوئية تظهر شخص مشاة يمشي باللون الأخضر",
    options: [
      "إشارة ضوئية تظهر شخص مشاة يمشي باللون الأحمر",
      "إشارة ضوئية تظهر شخص مشاة يمشي باللون الأخضر",
      "إشارة ضوئية تظهر شخص مشاة واقف باللون الأخضر",
      "جميع ماذكر",
    ],
  },


  {
    numb: 12,
    question: "ما هو الحد الأقصى لسرعة سيارات الركوب المتوسطة على الطرق الفرعية والتي يقع عليها مدارس؟",
    answer: "٤٠ كم/ساعة",
    options: [
      "٣٠ كم/ساعة",
      "٤٠ كم/ساعة",
      "٥٠ كم/ساعة",
      "٦٠ كم/ساعة",
    ],
  },


  {
    numb: 13,
    question: "السیارت المصممه لنقل ما لایزید على تسعة اشخاص بمن فیھم السائق تصنف من فئة:",
    answer: "سیارات الركوب",
    options: [
      "مركبات النقل المشترك",
      "سیارات الركوب",
      "مركبات الشحن",
      "جميع ماذكر",
    ],
  },


  {
    numb: 14,
    question: "الحد الأقصى لسرعة سيارات الركوب الصغيرة على الطرق الفرعية والتي يقع عليها مدارس هو؟",
    answer: "٤٠ كم/ساعة",
    options: [
      "٤٠ كم/ساعة",
      "٥٠ كم/ساعة",
      "٦٠ كم/ساعة",
      "٣٠ كم/ساعة",
    ],
  },


  {
    numb: 15,
    question: "سیارة الركوب المتوسطة مصممة لنقل بمن فیھم السائق",
    answer: "ما لا یقل عن عشرة و لا یزید عن الثلاثین",
    options: [
      "ما لا یقل عن عشرة ولا یزید عن عشرین",
      "ما لا یقل عن خمسة عشر ولا یزید عن عشرین",
      "ما لا یقل عن عشرة و لا یزید عن الثلاثین",
      "ما لایقل عن خمسة عشر و لا یزید عن الثلاثین",
    ],
  },


  {
    numb: 16,
    question: "من وظائف العلامات الأرضیة:",
    answer: "جمیع ما ذكر",
    options: [
      "وظائف إرشادیة",
      "وظائف تحذیریة",
      "وظائف تنظیمیة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 17,
    question: "المركبه المصممة لنقل ما یزید على ثلاثین راكبا ھي:",
    answer: "الحافلة",
    options: [
      "سیارة الركوب المتوسطه",
      "سیارة النقل المشترك",
      "الحافلة",
      "لا شيء مما ذكر",
    ],
  },


  {
    numb: 18,
    question: "الضوء الاحمر المخصص للمشاة في الاشارة الضوئیة یعني:",
    answer: "منع المشاة من عبور الطریق",
    options: [
      "السماح للمشاة بعبور الطریق",
      "منع المشاة من عبور الطریق",
      "عدم الشروع في عبور الطریق واتمام العبور بعد البدء فیه",
      "لا شيء مما ذكر",
    ],
  },


  {
    numb: 19,
    question: "یمتلك المشاة حق الاولویة عند:",
    answer: "جمیع ما ذكر",
    options: [
      "اجتیاز الممرات المخصصة لھم",
      "عند دخول المدرسة او الخروج منھا",
      "اعطاء شرطي المرور الاولویة للمشاة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 20,
    question: "عند وصول السائق الى تقاطع طرق علیه ان:",
    answer: "جمیع ما ذكر",
    options: [
      "یتوخي الحیطة والحذر التامین",
      "التحدید المسبق للمسرب الذي سیسلكه والالتزام به",
      "تحدید الاتجاه الذي سیسلكه في التقاطع",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 21,
    question: "اذا اعطى السائق الذي یقود مركبته في الطریق أي اشارة ضوئیة (غماز) فعلى كل سائق یسیر خلفه ان:",
    answer: "یخفف من سرعة مركبته وفسح المجال للمركبة الاخرى",
    options: [
      "زیادة سرعة مركبته وعدم فسح المجال للمركبة الاخرى",
      "متابعة سیره",
      "یخفف من سرعة مركبته وفسح المجال للمركبة الاخرى",
      "لا شيئ مما ذكر",
    ],
  },


  {
    numb: 22,
    question: "یجب على السائق الإلتزام بالجانب الایمن من الطریق في حال:",
    answer: "جمیع ما ذكر",
    options: [
      "الإنتقال الى طریق اخر یقع على یمینه",
      "تمكین المركبات القادمة من الخلف بتجاوز مركبته",
      "الاقتراب من المنعطفات او من رؤوس المرتفعات",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 23,
    question: "من الاماكن التي یمنع التوقف بھا:",
    answer: "جمیع ما ذكر",
    options: [
      "اماكن عبور المشاة وعلى الارصفة",
      "الممرات المخصصة للدراجات الھوائیة",
      "مقاطع السكك الحدیدیة والخطوط الحدیدیة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 24,
    question: "بعد ایقاف المركبة یجب:",
    answer: "جمیع ما ذكر",
    options: [
      "غلق جمیع الأبواب والنوافذ",
      "عدم ترك الأطفال بمفردھم في المركبة",
      "استعمال المكابح الیدویة الدائمة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 25,
    question: "من الاماكن التي یمنع التوقف بھا:",
    answer: "جمیع ما ذكر",
    options: [
      "الاماكن التي یؤدي توقف المركبة فیھا الى حجب اشارات الطریق عن انظار باقي مستخدمي الطریق",
      "على بعد یقل عن خمسة عشر مترا من مواقف الحافلات",
      "امام مداخل ومخارج ورش التصلیح وكراجات السیارات",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 26,
    question: "من الإصابات التي تتطلب إسعافات أولیة:",
    answer: "أ + ب",
    options: [
      "الجروح – النزیف – الكسور والحروق",
      "ضربات الشمس والإجھاد الحراري والتشنجات الحراریة",
      "أ + ب",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 27,
    question: "من أولویات الاسعافات الاولیة:",
    answer: "جمیع ما ذكر",
    options: [
      "إجراء التنفس الاصطناعي",
      "العنایة بإصابات الجھاز الدوراني من حیث القیام بتدلیك القلب",
      "فتح وإزالة العوائق من مجاري التنفس",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 28,
    question: "یحتوي صندوق الإسعافات الأولیة على",
    answer: "جمیع ما ذكر",
    options: [
      "علاقات وجبائر صغیرة",
      "رباط مثلث",
      "قفاز مطاطي",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 29,
    question: "عند صعود الركاب الى المركبة او النزول منھا یجب ان یكون:",
    answer: "من المكان المخصص للصعود ونزول الركاب اذا كان في المركبة مثل ھذا المكان",
    options: [
      "من الجانب الایسر لسیارة الركوب العمومي",
      "من المكان المخصص للصعود ونزول الركاب اذا كان في المركبة مثل ھذا المكان",
      "من الجانب الأیسر إذا كانت واقفة على الجانب الایمن من الطریق",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 30,
    question: "من مسؤولیة المسعف الأولي:",
    answer: "جمیع ما ذكر",
    options: [
      "تقییم الموقف",
      "محاولة إیقاف النزیف إذا وجد",
      "طمأنة المصاب",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 31,
    question: "یحظر على السائق استعمال اجھزة التنبیه الصوتیة:",
    answer: "جمیع ما ذكر",
    options: [
      "أثناء وقوف المركبة",
      "بالقرب من المستشفیات والمدارس واماكن العبادة",
      "بصفة مستمرة وبدون مبرر وبطریقة تزعج المشاة او تقلق راحة الآخرین",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 32,
    question: "من طرق الإسعافات الأولیة للجروح (إیقاف النزیف):",
    answer: "جمیع ما ذكر",
    options: [
      "الضغط المباشر بالأصابع على مكان النزیف",
      "الربط بواسطة رباط شاش أو الرباط الضاغط",
      "رفع الجزء المصاب أعلى من مستوى القلب في حالات جروح الأطراف",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 33,
    question: "یحتوي صندوق الإسعافات الأولیة على:",
    answer: "جمیع ما ذكر",
    options: [
      "ضمادات شاش باحجام مختلفة",
      "ضمادات عیون بیضاویة الشكل",
      "تشكیلة قطع مربعة من الشاش المعقم الجاف بأحجام مختلفة",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 34,
    question: "یجوز لاي فرد من افراد الشرطة اذا كانت المركبة غیر مسجلة او انتھى ترخیصھا لمدة تزید على ستة",
    answer: "حجز المركبة",
    options: [
      "حجز المركبة",
      "إلقاء القبض على السائق",
      "إلزام السائق بدفع غرامه فقط",
      "جمیع ما ذكر",
    ],
  },


  {
    numb: 35,
    question: "من الاسعافات الاولیة للكسور:",
    answer: "جمیع ما ذكر",
    options: [
      "یجب المحافظة على المجرى الھوائي للمصاب مفتوحا وًالقیام بعملیة التنفس الصناعي عند اللزوم",
      "استدعاء الإسعاف",
      "لإبقاء على الأجزاء المصابة ثابتة بدون حركة",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 36,
    question: "من أجل الحصول على تعبئة وقود آمنة يجب؟",
    answer: "جميع ما ذكر",
    options: [
      "إطفاء المحرك",
      "عدم التدخين",
      "عدم استخدام الهاتف المتنقل، وتركه داخل السيارة أو إغلاقه",
      "جميع ما ذكر",
    ],
  },

  {
    numb: 37,
    question: "على الراكب الجالس بجوار السائق",
    answer: "استخدام حزام الأمان لانه ملزم قانونيا",
    options: [
      "استخدام حزام الأمان لانه ملزم قانونيا",
      "إستخدام حزام الأمان إذا اراد ذلك",
      "عدم استخدام حزام الامان اذا كان یقید حریته",
      "لاشئ مما ذكر",
    ],
  },

  {
    numb: 38,
    question: "من وظائف العلامات الأرضیة:",
    answer: "جمیع ما ذكر",
    options: [
      "وظائف إرشادیة",
      "وظائف تحذیریة",
      "وظائف تنظیمیة",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 39,
    question: "واحدة من التالية ليست من وظيفة الإطارات",
    answer: "تزويد المركبة بالطاقة من خلال الحركة",
    options: [
      "تحمل الصدمات",
      "الإستدارة",
      "تزويد المركبة بالطاقة من خلال الحركة",
      "ايقاف المركبة",
    ],
  },

  {
    numb: 40,
    question: "من الاحتياطات التي يجب اتباعها عند الوقوف",
    answer: "جميع ما ذكر",
    options: [
      "ان لا يترك السائق مركبته دون اتخاذ الاحتياطات اللازمة لمنع وقوع أي حادث او استخدام مركبته بطريقة غير مشروعة",
      "لا يجوز للسائق ايقاف مركبته او تركها واقفة بدون مراقبة الا بعد ايقاف المحرك واستعمال المكابح اليدوية الدائمة",
      "لا يجوز للسائق ايقاف مركبته او تركها واقفة في طريق مائل الا بعد رفع المكبح اليدوي",
      "جميع ما ذكر",
    ],
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