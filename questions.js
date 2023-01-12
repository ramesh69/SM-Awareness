// creating an array and passing the number, questions, options, and answers
let questions_temp = [
  {
    numb: 1,
    question: "Do you post Daily Incidents, Feelings or Interest, Travel Destination, Motivation speech, commodity or other things on Facebook?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 2,
    question: "Do you use social media every day as a habit?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 3,
    question: "Do you use social media?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 4,
    question: "Once you log in to Facebook or any social media, do you stay logged in?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 5,
    question: "when you create a Facebook account or any social media account do you read the privacy policy and terms & conditions?",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 6,
    question: "When you find some information through the Facebook account - Does the related information show up on your screen? (Example: if you are searching for cake shops, Even after searching for a related shop, you will be shown various items related to cakes",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 7,
    question: "Do you know how Facebook automatically stores and uses your private data through a technical process?",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 8,
    question: "Are you rely on default privacy settings in your social media accounts?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 9,
    question: "Are you always sharing/turning on your location on social media?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 10,
    question: "Does your bio contain a lot of personal information on social media?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 11,
    question: "Do you always click on the links that appear on social media/Facebook?",
    answer: "Yes",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 12,
    question: "Are you aware of the friends that are you adding to your social media accounts?",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 13,
    question: "Do you know that some of social media networks are interconnected? (Example: when you post something on Instagram it is asking to share it with Facebook as well)",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 14,
    question: "Do you change your social media password often?",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
  {
    numb: 15,
    question: "Do you know that changing security settings in your social media accounts can improve your privacy?",
    answer: "No",
    options: [
      "Yes",
      "No",
    ]
  },
];

function getMultipleRandom(arr, num) {
  const shuffled = [...arr].sort(() => 0.5 - Math.random());

  return shuffled.slice(0, num);
}



let questions = getMultipleRandom(questions_temp, 10)