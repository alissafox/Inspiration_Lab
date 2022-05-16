
  var cards = new Array();

cards[0] = new Image();
cards[0].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\chariot.jpg';

cards[1] = new Image();
cards[1].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\death.png';

cards[2] = new Image();
cards[2].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\emperor.png';

cards[3] = new Image();
cards[3].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\empress.png';

cards[4] = new Image();
cards[4].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\fool.png';
cards[5] = new Image();
cards[5].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\judgement.jpg';

cards[6] = new Image();
cards[6].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\justice.png';

cards[7] = new Image();
cards[7].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\magician.jpg';

cards[8] = new Image();
cards[8].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\moon.png';
cards[9] = new Image();
cards[9].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\queenofcups.jpg';
cards[10] = new Image();
cards[10].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\queenofswords.jpg';
cards[11] = new Image();
cards[11].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\star.png';
cards[12] = new Image();
cards[12].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\sun.png';
cards[13] = new Image();
cards[13].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\tower.png';
cards[14] = new Image();
cards[14].src = 'C:\TM\Inspiration_Lab\taro_cards\assets\img\world.png';



function pickCard() {
    return Math.floor(Math.random() * cards.length);
  }
  
  function mainCard() {
    document.getElementById("cardPic").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\tarot card.png" + cards[pickCard()];
  }
  mainButton.addEventListener("click", mainCard);
  function chooseCard() {
    return Math.floor(Math.random() * cards.length);
  }
  
  function card1() {
    document.getElementById("card1").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button1.addEventListener("click", card1);
  
  function card2() {
    document.getElementById("card2").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button2.addEventListener("click", card2);
  
  function card3() {
    document.getElementById("card3").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button3.addEventListener("click", card3);
  
  function card4() {
    document.getElementById("card4").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button4.addEventListener("click", card4);
  
  function card5() {
    document.getElementById("card5").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button5.addEventListener("click", card5);
  
  function card6() {
    document.getElementById("card6").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button6.addEventListener("click", card6);
  
  function card7() {
    document.getElementById("card7").src = "C:\TM\Inspiration_Lab\taro_cards\assets\img\\" + cards[chooseCard()];
  }
  button7.addEventListener("click", card7);
  
 
  