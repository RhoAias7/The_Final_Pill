/*
*Logic
*/

var score = 0;
var playerChoice;


var readable = {
	'0': 'Blanka',
	'1': 'Ryu',
	'2': 'Chun Li',
};

var computerChoice = {
	init: function(){
		this.store = Math.floor(Math.random() * 3);
		this.text = readable[this.store];
	},
	store: '',
	text: '',
};

var order = [0, 1, 2, 0];

var chooseWinner = function(player, computer){
	if(order[player] === order[computer]){
		return 'The is tied. Try again?';
	}
	else if(order[player] === order[computer + 1]){
		score++;
		return 'You have won. Go again?';
	}
	else{
		score--;
		return 'You have lost. Wanna try again?';
	}	
};

/*
*UI
*/

var paragraph = document.querySelector('p');

var assignClick = function(tag, place){
	//assign a click listener
	tag.addEventListener('click', function(){
		//set the player's choice
		playerChoice = place;
		//give feedback  to the computer aka computeChoice
		computerChoice.init();
		paragraph.innerText = 'The computer chose: '+computerChoice.text;
		//determine the winner
		//display the winner and the current score	
		paragraph.innerText += '\n'+chooseWinner(playerChoice, computerChoice.store);
		paragraph.innerText += '\n'+'Score: '+score;
	})	
}

var images = {
	tags: document.getElementsByTagName('img'),
	init: function(){
		for(var place = 0; place < this.tags.length; place++){
			assignClick(this.tags[place], place);
		}
	}
}
images.init();