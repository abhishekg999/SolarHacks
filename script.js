var speed = 20;
var i = 0;
var text = "A corrupt government official has hacked into the bank accounts of 5 people and stolen \
			all of their money ($500 dollars each). You have successfully disabled his program, but \
			the fact still remains that the money is stolen. account = [0,0,0,0,0].\
			Restore the money back to their accounts."


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



