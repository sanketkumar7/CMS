// let days=30;
// let a=10;
// let b=20;
// console.log(calculatesalary(days));

// function sum(a,b)
// {
//     return a+b;
// }

// let sum={"a":"20"};
// console.log(sum);

// sum=function(a,b){return a-b};
// console.log(sum(a,b))



// let b=20;
// varsum=sum();
// console.log(varsum);
// if(varsum>=30)
// {
//     alert("Sum is greater than 50");
// }
// else{
//     alert("Else");
// }

// function calculatesalary(days)
// {
//     salary = 800;
//     return salary*days;
//     // console.log(a+b);
// }
// let b=5;
// // saygoodmorning();
// let evenoddvar=evenodd(a);
// console.log(evenoddvar);
// evenodd();


// function saygoodmorning()
// {
//     console.log("Good morning");
// }

// function evenodd()
// {

// }

// function evenodd(p)
// {
//     // console.log(p);
//     if(p%2==0)
//     {
//         return "even";
//         // console.log("even")
//     }
//     else{
//         // console.log("odd");
//     }
// } 


// function eat("puri","bhaaji")
// {
//     console.log(a,b)
//     console.log("I am eating above things");
// }



// let text = "5";
// text = text.padStart(9,"@");
// console.log(text); 


// let text="That that manasvi mask";
// // hello.".search(".")
// console.log(text.search(/./));


// var num=10;

// let sr="this is value of num";


// let firstName = 10;
// let lastName = 20;

// let text = `Welcome ${firstName * lastName}!`;
// console.log(text);


// let text = " The rain in SPAIN stays mainly in the plain";
// console.log(text.endsWith("plain"));

// let text = "The rain in SPAIN";
// let iterator=text.matchAll("Play");
// for(let i=0;i<iterator;i++)
// {
//     console.log(iterator.next());
// }

// let variable=10;


// Array syntax
// keyword(var,let,const) varname=[];
const cars = ["Saab",
        10,
        "BMW",
        true];
// console.log(cars);

// const vehicle=[];

// vehicle[0]="two wheeler";
// vehicle[1]="Three wheeler";
// vehicle[2]="Four wheeler";
// console.log(vehicle);

// const book="music";
// book ="novel";("Saab","Volvo",10,true)
// const shop = new Array("Saab","Volvo",10,true);
// shop[0]="maruti";
// shop=new Array("honda");
// let arraystr=shop.toString();
// console.log(typeof(shop));
// console.log(shop);


// const obj={
//     'name':"shubham",
//     'age':10,
//     0:"the",
//     true:"true"
// };

// console.log(obj['name']);
// console.log(arr);

// var key=10;

// const arr=["1","2","4","10","9"];
// var key=10;
// for(let i=0;i<arr.length;i++)
// {
//     if(arr[i]==key)
//     {
//         console.log(`Match Found at ${i}`);
//         break;
//     }

// }

// const arr=["1","2","4","10","9"];
// console.log(`Array before push ${arr}`)
// arr.push("23");
// console.log(`Array After push ${arr}`)

// arr[arr.length]="36";
// console.log(`Array After push ${arr}`)


// const fruits = ["Banana", "Orange", "Apple"];
// fruits[0] = "Lemon";
// console.log(fruits["name"]);




// var points = [40];
// var points = new Array(4);
// if(points===points)
// {
//     console.log("true");
// }


// const fruits = 60;

// console.log(fruits instanceof Array);


// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// console.log(fruits[2]);
// let fruit = fruits.at(2);
// console.log(fruit);


// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// console.log(fruits[2]);
// let fruit = fruits.at(-2);
// console.log(fruit);


// console.log(fruits.toString());
// console.log(fruits.join("%"));


// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// console.log(`Before POP ${fruits} `)
// fruits.pop();
// console.log(`After POP ${fruits} `)


// const fruits = ["Banana", "Orange", "Apple", "Mango","Apple"];

// fruits.shift();
// console.log(fruits[0]);

// console.log(fruits.indexOf("Apple",0));


// const numbers = [4, 9, 16, 25, 29];
// let first = numbers.findIndex(myFunction);
// function myFunction(value, index, array) {
//   return value > 18;
// }
// console.log(first)


// const numbers = ["Banana", "Orange", "Apple", "Mango"];
// numbers.sort();
// console.log(numbers);


// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// fruits.reverse();
// console.log(fruits);

// const cars1 = [
//     {type:"Saab", year:2001},
//     {type:"BMW", year:2010},
//     {type:"Volvo", year:2016},

//   ];

//   for()
//   {
//     a.year-b.year;
//     20010-2016;
//     [-6]
//     if(15>newvalue)
//     {
//         [15,-9]
//         [-9,-6,15];
//         []
//     }
//   }
// cars1.sort(function(a, b){return a.year - b.year});
// console.log(cars1);


// const points = [40, 100, 1, 5, 25, 10];
// points.sort(function(a, b){return a - b});
// console.log(points);

// console.log(Math.max.apply(null, [1, 2, 3]));


// const numbers = [45, 4, 9, 16, 25];
// let totalsum=0;
// let i=0;
// function myFunction(value,index,array)
// {
//     totalsum+=array[i];
//     i++;
//     return totalsum;
// }
// numbers.forEach(myFunction);

// console.log(totalsum);

// const numbers1 = [45, 4, 9, 16, 25];
// const numbers2 = numbers1.map(myFunction);

// function myFunction(value) {
//   return value * 2;
// }
// console.log(numbers1);
// console.log(numbers2);


// const words1 = ['hello', 'world','how', 'are', 'you'];
// const letters1 = words1.map(word => word.split(''));
// console.log(letters1);


// const words = ['hello', 'world', 'how', 'are', 'you'];
// const letters = words.flatMap(word => word.split(''));
// console.log(letters);

// const numbers = [45, 4, 9, 16, 25];
// const over18 = numbers.map(myFunction);
// const over19 = numbers.filter(myFunction);

// function myFunction(value, place, numbers) {
//   return value > 45;
// }

// console.log(numbers);
// console.log(over18);
// console.log(over19);


// const numbers = [45, 4, 9, 16, 25];
// let sum = numbers.reduce(multiply);

// function myFunction(total, value, index, array) {
//   return total + value;
// }





// console.log(sum)
// let sumby=0;
// let normalsum=0;
// for(let i=0;i<5;i++)
// {
//     sumby=sumb(sumby,i);
//     //sumby=0+0+0=0;
//     //sumby=0+0+1=1;
//     //sumby=1+1+2=4;
//     //sumby=4+4+3=11;
//     //sumby=11+11+4=26;
// }

// function sumb(sumby,i)
// {
//     return sumby+i;
// }
// console.log(sumby);
// console.log(sum);
// console.log(normalsum);

// function multiply(value)
// {
//     return value*value;
// }
// // [2025,16,81,256,625];
// console.log(sum);

// let total=0;
// const numbers = [45, 4, 9, 16, 25];
// let sum = numbers.filter(myFunction);
// function myFunction(value, index, array) {
//   return value>18;
// }
// console.log(sum);

// const numbers = [45, 90, 19, 126, 25];
// let allOver18 = numbers.every(myFunction);

// function myFunction(value, index, array) {
//   return value > 18;
// }

// console.log(allOver18);


// const numbers = [15, 4, 9, 16, 5];
// let someOver18 = numbers.some(myFunction);

// function myFunction(value, index, array) {
//   return value > 18;
// }

// console.log(someOver18);


// const arr=Array.from("ABCDEFG");
// console.log(arr);


// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// const keys = onj.keys();
// const onj={
//     "key1":0,
//     "key2":1,
//     "key3":2,
// };
// for(let key of keys)
// {
//     console.log(key);
// }
// console.log(keys.next().value);

// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// const keyvaluepairs = fruits.entries();

// for (let x of keyvaluepairs) {
//   console.log(x);
// }

// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// fruits[0]=1;
// // fruits=[1,2,3,4];
// console.log(fruits);


// const pi=9;
// const p=[10,10,0];


// var fruits = ["Banana", "Orange", "Apple", "Mango"];

// // fruits[0]=1;
// fruits=[1,2,3,4];
// console.log(fruits.toSorted());






// OBJECTS

// const person = {0:"John", lastName:"Doe", age:50, eyeColor:"blue"};
// console.log(person[0]);//If Keys are Numbers
// console.log(person.lastName);//If Keys are Strings


// person={}; //Cannot Redeclare The const object
// person.lastName=['dob'] //But Can change values in the object


// Alos can have functions in objects as well objects in objects

// const animal={
//     name:"Dog",
//     bark:function (){
//         console.log("Dog is Barkinbg");
//     },
//     nestedobj:{
//         name:"I am nested",
//         walk:function()
//         {
//            console.log(this.name);
//         }
//     }
// };

// animal.bark();
// animal.nestedobj.walk();


// Objects in Different ways

// const obj=new Object();
// console.log(obj);
// obj.name="hello";
// obj.wait=function()
// {
//     console.log("I am Waiting");
// }
// obj[0]="this is zero";
// obj.wait();

// const newobj={
//     name:"this old obj"
// };

// const objcreatedobj=Object.create(newobj);
// console.log(objcreatedobj);

// const obj={
//     name:"Ana",
// };

// const objnew=obj;
// const ob2={
//     name:"Belle",
// }
// obj.name="Belle";
// console.log(objnew==ob2);

// Object Properties

// const person = {0:"John", lastName:"Doe", age:50, eyeColor:"blue"};
// console.log(person[0]);//If Keys are Numbers
// console.log(person.lastName);//If Keys are Strings

// For in Loop on Object
// const person = {
//     fname:" John",
//     lname:" Doe",
//     age: 25
//   };

//   for (let x in person) {
//     console.log(person[x]);
//   }


// //   Adding properties to object
//   person["dob"]="-9-04-2003";
//   console.log(person);



//   Deletinh properties from object
// delete person.age;
// console.log(person);

// const person = {
//   fname:" John",
//   lname:" Doe",
//   age: 25
// };

// for (let x in person) {
//   txt += person[x];
// }


// Object.defineProperty(person, "fname", { readable: false });
// person.fname="eve";
// console.log(person.fname);

// Object.defineProperty(person, "fname", { enumerable: false });
// for (let x in person) {
//     console.log(x);
//   }


// const animal={
//     name:"Dog",
//     bark:function (){
//         console.log("Dog is Barkinbg");
//     },
//     nestedobj:{
//         name:"I am nested",
//         walk:function()
//         {
//            console.log(this.name);
//         },
//         br :animal.bark,
//     }
// };

// animal.nestedobj.br();
// const myObject = {
//     myProp: 'Value',
//     toString:function ()
//     {
//         console.log("This is my own function");
//     }
//   };

//   myObject.toString();


// console.log(objname);


// 25-042024

// const person = {
//   name: "John",
//   age: 30,
//   city: "New York"
// };
// const myArray = Object.values(person);
// console.log(myArray);

// let myString = JSON.stringify(person);
// console.log(myString);
// console.log(typeof(myString));



// Get And Set in JS
// const person = {
//   firstName: "John",
//   lastName: "Doe",
//   language: "",
//   get lang() {
//     return this.language;
//   },
//   set lang(lang)
//   {
//     this.language=lang;
//   }
// };

// console.log(person.lang+ "Empty");
// person.lang="Jimmy";
// console.log(person.lang);
// console.log(person.lang);



// const obj=new person("i","j","h");

// function Person(first, last, age, eye,wt) {
//     this.firstName = first;
//     this.lastName = last;
//     this.age = age;
//     this.eyeColor = eye;
//     this.weight=wt;
//   }
// //   Person.weight="50";


// // const shubham=new Person("shubham","Chhanwal","20","blue","39");
// // console.log(shubham);
// // const sonal=new Person("Sonal","Bhirud","20","blue","45");
// // console.log(sonal);
// // console.log(shubham===sonal);
// // shubham.height="170cm";
// // console.log(shubham);
// // shubham.fullname = function () {
// //     return this.firstName + " " + this.lastName;
// //   };
// //   console.log(shubham);



// function Person(first, last, age, eyecolor,fullname) {
//     this.firstName = first;
//     this.lastName = last;
//     this.age = age;
//     this.eyeColor = eyecolor;
//     this.fullname = fullname;
//   }


//   const shubham=new Person("Shubham","chh","29","red",function (){return "Morning"});
//   const Sonal=new Person("Shubham","chh","29","red",saymorning);

//   function saymorning()
//   {
//     return "morning";
//   }
//   console.log(shubham.fullname());

// let b=new Number();
// b=10;
// console.log(typeof(b));







// Object Prototypes
// function Person(first, last, age, eyecolor) {
//     this.firstName = first;
//     this.lastName = last;
//     this.age = age;
//     this.eyeColor = eyecolor;
//   }


//   Without Prototype class
//   Person.weight="40";
//   const shubh=new Person("shubh","Chh","24","blue","30");
//   console.log(shubh);

//With Prototype class
// function Person(first, last, age, eyecolor) {
//     this.firstName = first;
//     this.lastName = last;
//     this.age = age;
//     this.eyeColor = eyecolor;
//   }

//   Person.prototype.nationality = "English";
//   const shubh=new Person("Shubh","Chh","28","black");
// //   shubh.nationality="indian";
//   console.log(shubh.nationality);



// Object Management







//Object Protection


// Using Const
// const car = {type:"Fiat", model:"500", color:"white"};
// car={};
// car.model="300";
// console.log(car.model);


// preventExtensions

// const car = {type:"Fiat", model:"500", color:"white"};
// Object.preventExtensions(car);
// car.height="200cm";
// console.log(car);
// console.log(Object.isExtensible(car));

// Object.seal(object)


// const car = {type:"Fiat", model:"500", color:"white"};
// // Object.seal(car);
// car.height="200cm";
// // delete car.model;
// car.model="400";
// console.log(car);
// console.log(Object.isSealed(car));



// Object.freeze()

// const car = {type:"Fiat", model:"500", color:"white"};
// Object.freeze(car);
// car.height="200cm";
// delete car.model;
// car.model="400";
// console.log(car);
// console.log(Object.isFrozen(car));





// Javascript Dom

// document.getElementById("id");

// document.getElementById("demo").innerText="This is set using id";

// document.getElementsByName("name")

// let inputelments=document.getElementsByName("name");
// console.log(inputelments);
// for(let i=0;i<inputelments.length;i++)
// {

//     console.log( document.getElementsByName("name")[i])
// }
// const obj=[1,24,5,63,64];
// console.log(obj[7]);


// document.getElementsByTagName("Tagname");
// let taglist=document.getElementsByTagName('p');
// console.log(taglist);
// taglist[0].style.color="blue";



// document.getElementsByClassName();

// let elementswithclassname=document.getElementsByClassName('deno');
// console.log(elementswithclassname);
// elementswithclassname[0].style.color="blue";



// document.querySelector("query1 query2 query3");

// let elementswiththequery=document.querySelectorAll('.parent h3');
// elementswiththequery[1].innerText="This is head";
// console.log(elementswiththequery);
// elementswithclassname[0].style.color="blue";



// Selecting Parent Elements
// document.querySelector("query1 query2 query3");

// let elementswiththequery=document.querySelector('head');
// console.log(elementswiththequery.parentNode);



// Selecting Sibling Elements
// document.querySelector("query1 query2 query3");

// let elementswiththequery=document.querySelector('head');
// console.log(elementswiththequery.nextElementSibling);

// let elementswiththequery3=document.querySelector('head');
// console.log(elementswiththequery3.nextSibling);

// let elementswiththequery4=document.querySelector('body');
// console.log(elementswiththequery4.previousSibling);


// Selecting Children

// parentElement.firstChild; 
// console.log(document.getElementById("body").firstElementChild);
// console.log(document.getElementById("body").firstChild);
// console.log(document.getElementById("parent").lastChild);
// console.log(document.getElementById("parent").lastElementChild);
// console.log(document.getElementById("parent").childNodes);
// console.log(document.getElementById("parent").children);




// Manipulating Elements

// 1)Creating Elements
// let div = document.createElement('h3');
// div.id="newdiv";
// div.innerText="This is rendered using inner html"
// div.innerText="This is new div";
// div.style.fontWeight=400;
// div.style.color="pink";
// document.getElementById("main").appendChild(div);


// 2)set or get text content
// let text=document.getElementById("parent").textContent;
// let text2=document.getElementById("parent").innerText;
// let text3=document.getElementById("parent").innerHTML;
// console.log(text3);

// document.getElementById("note").textContent="Changed using textcontent";
// document.getElementById("note").innerHTML="Changed using textcontent";
// document.getElementById("note").innerText="Changed using textcontent";

// document.getElementById("note").innerHTML="<h1>this is changed using innerHtml</h1>";


// const h1=document.createElement("h1");
// h1.innerText="This is text before p";
// document.getElementById("note").before(h1);

// const h2=document.createElement("h2");
// h2.innerText="This is text after p";
// document.getElementById("note").after(h2);





// items=["<li>React</li>","<li>meteor</li>","<li>polymer</li>"];
// document.getElementById("ul").lastChild.after(items);
// document.getElementById("ul").firstChild.after(items);


// let list = document.querySelector('#ul');

//          list.insertAdjacentHTML('beforebegin', '<h2>Web Technology</h2>');
//          list.insertAdjacentHTML('afterbegin', '<li>HTML</li>');
//          list.insertAdjacentHTML('beforeend', '<li>JavaScript</li>');
//          list.insertAdjacentHTML('afterend', '<p>For frontend developers</p>');

// const ul=document.getElementById("ul");
// const li=document.createElement('li');
// li.innerText="Replaced Child";
// ul.replaceChild(li,ul.firstElementChild);

// const ul=document.getElementById("ul");
// let clonedNode = ul.cloneNode(false);
// const body=document.getElementsByTagName('body');
// body[0].appendChild(clonedNode);


// let menu = document.getElementById('ul');
// menu.removeChild(menu.firstElementChild);

// let p=document.createElement('p');
// p.innerText="Inserted before ul"
// document.getElementById("ul").insertBefore(p,document.getElementById("mn"));



//Jaavscript Dynamic Attributes


// element.setAttribute(Attributesname, value);
// element.removeAttribute(Attributesname, value);
// element.getAttribute(Attributesname);
// element.hasAttribute(name);


// console.log(document.getElementById("pt").hasAttribute("style"));
// document.getElementById("pt").setAttribute("style","color:red");
// console.log(document.getElementById("pt").hasAttribute("style"));
// document.getElementById("pt").setAttribute("class","pta");
// // document.getElementById("pt").removeAttribute("id");

// console.log(document.getElementById("pt").getAttribute("class"));


// Style manipulation
// 16px = 1rem

// element.style
// console.log(document.getElementsByTagName("p"));
// document.getElementsByTagName("p")[0].style.fontSize="2rem";
// document.getElementsByTagName("p")[0].style.cssText = 'background-color:yellow';
// document.getElementsByTagName("p")[0].setAttribute('style','color:black;background-color:red');
// document.getElementsByTagName("p")[0].style.cssText += 'background-color:yellow';
// let style = window.getComputedStyle(document.getElementsByTagName("p")[0],':hover');
// console.log(style);



// Accessing Classes
// console.log(document.getElementsByTagName("p")[0].className);
// document.getElementsByTagName("p")[0].className+=" hello";
// console.log(document.getElementsByTagName("p")[0].className);
// console.log(document.getElementsByTagName("p")[0].classList);
// document.getElementsByTagName("p")[0].classList.add("peko");
// console.log(document.getElementsByTagName("p")[0].classList);
// document.getElementsByTagName("p")[0].classList.remove("hello");
// console.log(document.getElementsByTagName("p")[0].classList);


// Events
// Element.addEventListener('event',function() {
//   
// });

// btn=document.getElementById("btn");
// document.addEventListener('click',function() {

//     document.getElementById("note").style.fontSize="5rem";
//     document.getElementById("note").setAttribute("onload","show()");
// });


// let body = document.getElementById('body');
// body.addEventListener('keydown', (event) => {
//     console.log(`key=${event.key},code=${event.code}`);
// });

// let counter=0;
// const form=document.getElementById("form");
// form.addEventListener('click',(event)=>{
// console.log(++counter);
// alert("mouse up event fired");
// console.log(event);
// })

// const form=document.getElementById("form");
// console.log(form[0]);
// form.addEventListener('submit',(event)=>{
// event.preventDefault();
// })

// console.log(form.elements["dept"].value);

// function showError(input, message) {
// 	return showMessage(input, message, false);
// }

// function showSuccess(input) {
// 	return showMessage(input, "", true);
// }

// console.log(showError());
// console.log(showSuccess());
// const form=document.getElementById("form");
// form.addEventListener('submit',function (event){
//         console.log("inside");
//         let mobilenumebr=document.getElementById("mnumber").value;
//         if(mobilenumebr.length < 10)
//         {
//         document.getElementById("mobileerror").style.display='block';
//         event.preventDefault();
//         }
//         else{
//                 event.submit();
//                 console.log("Form Submitted Successfully");
//         }
// })


// let select=document.getElementById("select");
// // select.options[0].value="Newval";
// // select.options[0].text="Select Me";

// const newOption = document.createElement('option');
// newOption.innerText="D4";
// select.add(newOption,select.options[0]);
// // select.remove(4);
// // select.remove(3);

// let bt=document.getElementById("clk");
// bt.addEventListener('click',(event)=>{
//         select.remove(0);
//         event.preventDefault();

// });


// Arrow Functions


// Normal Function Definition
// function GoodAfternoon()
// {
// console.log("Good Sfternoon");
// }

// // Function declaration using varaible
// const Goodmorning=function()
// {
//         console.log("Goodmorning");
// }

// Goodmorning();


// Arrow Functions

// ()=>{
// console.log("This is arrow function");
// }


// If Function has only one line of code
// const fun=(param)=> console.log("This is arrow function"+param);
// const fun=param=> console.log("This is arrow function"+param);

// fun(44);



// Map Filter Reduce

// map(function(){
// //function defn
// });

// const numbers = [65, 44, 12, 4];
// let newArrn=[];


// function multiply(currentvalue,index,array)
// {
//         return currentvalue * 10; 
// }


// for (i = 0; i < numbers.length; i++) {
//      let mutiplicationvalue= multiply(numbers[i],i,numbers); 
//      newArrn[i]=mutiplicationvalue;
// }
// console.log(newArrn);




// const newArr = numbers.map((num) => {
//         return num * 10;
// });

// console.log(newArr);


// const ages = [32, 33, 16, 40];
// const result = ages.filter(checkAdult);

// function checkAdult(age) {
//   return age >= 18;
// }

// console.log(result);


// Asynchronous Javascript


// Callbacks

// const myNumbers = [4, 1, -20, -7, 5, 9, -6];



// function removeNeg(numbers, callback) {
//         const myArray = [];
//         for (const x of numbers) {
//           if (callback(x)) {
//             myArray.push(x);
//           }
//         }
//         return myArray;
//       }





//       const posnumbers=removeneg(array,(x) => x >= 0);

// Set Timeout
// setTimeout(myFunction, 3000);

// function myFunction() {
// alert("This is a Time Out Function");
// }

// setTimeout(()=>{
// console.log("Say HI");
// },2000);


// Set Interval
// setInterval(myFunction, 10000);

// function myFunction() {
// console.log("This is a Noraml Function");
// }

// setInterval(()=>{
// console.log("This is a arrow function");
// },2000);