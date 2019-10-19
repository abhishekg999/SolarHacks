
var speed = 20;
var i = 0;
var text = "This same government official has hacked into the bank accounts of 5 people and stolen \
			all of their money ($500 dollars each). You have successfully disabled his program, but \
			the fact still remains that the money is stolen. Restore the money back to their accounts.\
			<br /> Given: An array accounts that contains the money of each person's account; account = [0, 0, 0, 0, 0];\
			return a new array with the account values restored."



function typeWriter() {

  if (i < text.length) {
    document.getElementById("f1").innerHTML += text.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}


function main(){
	typeWriter(text);
}

