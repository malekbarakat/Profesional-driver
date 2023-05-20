// creating an array and passing the number, questions, options, and answers
let questions = [
  {
    numb: 1,
    question: "في الصورة التي امامك ھل تتجاوز المركبة الزرقاء بشكل صحیح",
    answer: "نعم",
    img: "images/1.webp",
    options: ["نعم", "لا"],
  },

  {
    numb: 2,
    question: "تستخدم الأزرار البیضاء للدلالة على",
    answer: "المسارب",
    options: ["حواف الطریق", "إعطاء الأولویه", "المسارب", "لاشيء مما ذكر"],
  },

  {
    numb: 3,
    question: "عند وصول السائق الى تقاطع طرق منظم بإشارة مرور ضوئیة علیه",
    answer: "جمیع ما ذكر",
    options: [
      "التخفیف من السرعة",
      "السیر بمركبته بحذر وانتباه في المواقع التي تكون فیھا الاشارة الضوئیة صفراء متقطعة",
      "الوقوف قبل خط الوقوف المخصص واعطاء الاولویة للمركبات الاخرى اذا كانت الاشارة الضوئیة حمراء والعبور اذا كانت خضراء",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 4,
    question: "من واجبات السائق على الطرق",
    answer: "جمیع ما ذكر",
    options: [
      "عدم التجاوز بمركبته السرعة القصوى المحددة على الطریق",
      "التخفیف من سرعة مركبته عند مروره بالمناطق المأھولة بالسكان",
      "عدم السیر ببطء غیر عادي دون مبرر وبصورة تعیق حركة المرور الطبیعیة لباقي المركبات",
      "جمیع ما ذكر",
    ],
  },
  {
    numb: 5,
    question:
      "إذا اراد السائق التوجه نحو الیسار بمركبته مع عدم وجود علامات ارضیة على الطریق فعلیه",
    answer: "جمیع ما ذكر",
    options: [
      "الالتزام بالجانب الایمن من الطریق ذي الاتجاھین والذي له مسرب واحد باتجاه السیر",
      "الالتزام باقصى مسرب الیسار باتجاه السیر من الطریق ذي الاتجاھین والذي له اكثر من مسرب",
      "الالتزام باقصى مسرب الیسار باتجاه السیر في الطریق ذي الاتجاه الواحد",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 6,
    question: "من الاحتیاطات التي یجب اتباعھا عند الوقوف",
    answer: "جمیع ما ذكر",
    options: [
      "لا یجوز للسائق ایقاف مركبته او تركھا واقفة بدون مراقبة الا بعد ایقاف المحرك واستعمال المكابح الیدویة الدائمة",
      "ان لا یترك السائق مركبته دون اتخاذ الاحتیاطات اللازمة لمنع وقوع أي حادث او استخدام مركبته بطریقة غیر مشروعة",
      "لا یجوز للسائق ایقاف مركبته او تركھا واقفة في طریق مائل الا بعد رفع المكبح الیدوي",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 7,
    question:
      "من الاجراءات التي یتخذھا السائق الذي یتم تجاوز مركبته لتسھیل التجاوز",
    answer: "جمیع ما ذكر",
    options: [
      "عدم زیادة سرعة مركبته",
      "الالتزام باقصى الیمین من الطریق",
      "تخفیف سرعتھا اذا اقتضى الوضع ذلك",
      "جمیع ما ذكر",
    ],
  },
  {
    numb: 8,
    question: "",
    answer: "جمیع ما ذكر",
    options: [
      "المناطق المخصصة لفئات معینة من المركبات",
      "الاماكن الممنوع الوقوف او التوقف فیھا وذلك بموجب الشواخص",
      "الأماكن التي یعیق توقف المركبة فیھا تحرك مركبة اخرى متوقفة",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 9,
    question: "من الاجراءات التي تتخذ لاتمام عملیة التجاوز",
    answer: "جمیع ما ذكر",
    options: [
      "مراعاة اشارات الطرق",
      "التأكد من ان الطریق مكشوف امامه لمسافة كافیة لاتمام عملیة التجاوز",
      "النظر في المراة الداخلیة ومن ثم الجانبیة للتأكد من ان الوضع امن من الخلف ویسمح بالتجاوز",
      "جمیع ما ذكر",
    ],
  },

  {
    numb: 10,
    question: "من الاماكن التي یمنع التوقف بھا",
    answer: "جمیع ما ذكر",
    options: [
      "الأماكن التي یمنع الوقوف او التوقف فیھا وذلك بموجب العلامات الارضیة",
      "على مسار الطریق بمحاذاة مركبة اخرى متوقفة (الوقوف المزدوج)",
      "في حدود خمسة امتار قبل حنفیة اطفاء الحریق وبعدھا",
      "جمیع ما ذكر",
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
