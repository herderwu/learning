var x = 1;
function test(){
	console.log(this.x);
}
test(); // 1


var x = 2;
function test() {
  this.x = 3;
}
test();
console.log(x);//3

var x = 5;
function test() {
  console.log(this.x);
}
var o = {};
o.x = 4;
o.m = test;
o.m();//4

function test() {
  this.x = 6;
}
var o = new test();
console.log(o.x);//6

var x = 5;
function test() {
  this.x = 6;
}
var o = new test();
console.log(x);//5

var x = 7;
function test() {
  console.log(this.x);
}
var o = {};
o.x = 8;
o.m = test;
o.m.apply();//7


var x = 7;
function test() {
  console.log(this.x);
}
var o = {};
o.x = 8;
o.m = test;
o.m.apply(o);//8