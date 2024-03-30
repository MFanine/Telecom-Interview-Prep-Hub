// var myText = 'Bonjour, je suis Siham, ta consultante recrutement. 😊 <br>Es-tu prêt à décrocher un job et donner un boost à ta carrière ? <br>Afin de te proposer l’offre la plus adaptée à ton profil, je vais te poser quelques questions.', 
// i = 0 ,
 
//   function (){
//     'use strict';
//     var typeWriter = setInterval(function(){
//         document.getElementById('type').textContent += myText[i];
//         i = i + 1;
//         if(i > myText.length -1){
//             clearInterval(typeWriter);
//         }
//     },100);
//   };

const textDisplay = document.getElementById('type')
const phrases = ['Bonjour, je suis Mouad, ta consultante recrutement. 😊 <br>Es-tu prêt à décrocher un job et donner un boost à ta carrière ? <br>Afin de te proposer l’offre la plus adaptée à ton profil, je vais te poser quelques questions.']
let i = 0
let t = 0
let currentPhrase = []
function loop (){

    textDisplay.innerHTML = currentPhrase.join('')
    if(i < phrases.length){
       


        if(t < phrases[i].length){
            currentPhrase.push(phrases[i][t])

            t++
        }

        if(t== phrases[i].length){
            i++
        }


      
    }
    setTimeout(loop ,50)
}

loop()

var data= {
    chatinit:{
        title: ["Bonjour 😊 ", " j'espère que vous allez bien ","Pour commencer, comment t’appelles-tu ? <br><span class='pp'>Prenom :</span> <br>  <input type='text' name='first_name' placeholder='First Name' class='fname' > <br><br><span class='pp'>Nom :</span> <br>   <input type='text' name='last_name' placeholder='Last Name' class='fname' > "],
        options: ["Suivant "]
        },

    suivant:{
    title: [ "Quel est ton niveau d'études ?"],
    options: ["Niveau Bac ", "Bac ", "Bac +2 ", "Bac +3 ", "Bac +4 ", "Bac +5 ", "Autres "],
    url: {

    }
    },

    bac: {
    title: ["Et ton niveau de français ?"],
    options: ['Courant', 'Professionnel', 'Intermédiaire', 'Debutant'],
    url: {

    }
},
intermédiaire: {
    title: ["Très bien, as-tu de l’expérience dans le domaine des centres d'appel ?👇"],
    options: ['Oui' , 'Non'],
    url: {
        
    }
},
courant: {
    title: ["Très bien, as-tu de l’expérience dans le domaine des centres d'appel ?👇"],
    options: ['Oui' , 'Non'],
    url: {
        
    }
},
professionnel: {
    title: ["Très bien, as-tu de l’expérience dans le domaine des centres d'appel ?👇"],
    options: ['Oui' , 'Non'],
    url: {
        
    }
},
debutant: {
    title: ["Très bien, as-tu de l’expérience dans le domaine des centres d'appel ?👇"],
    options: ['Oui' , 'Non'],
    url: {
        
    }
},
oui: {
    title: ["Chez quels centres d'appel ? <br> <input type='text' class='tbox' >"],
    options: ['Valider'] ,
    url: {

    }
},
non: {
    title: ["Chez quels centres d'appel ? <br> <input type='text' class='tbox' >"],
    options: ['Valider'] ,
    url: {

    }
},
valider: {
    title: ["Pendant combien de temps ?"],
    options: ['Moins de 3 mois', 'Entre 3 et 6 mois', 'Entre 6 et 12 mois', 'Plus de 12 mois'],
    url: {

    }
},
moins: {
    title: ["Et pour quel type d'activité ?"],
    options: ['Reception', 'Emission'],
    url: {

    }
},
entre: {
    title: ["Et pour quel type d'activité ?"],
    options: ['Reception', 'Emission'],
    url: {

    }
},
plus: {
    title: ["Et pour quel type d'activité ?"],
    options: ['Reception', 'Emission'],
    url: {

    }
},
reception: {
    title: ["Que connais-tu du métier de la relation client ? <br> <input type='text' class='tbox' >"],
    options: ['Dcc'] ,
    url: {

    }
},
emission: {
    title: ["Que connais-tu du métier de la relation client ? <br> <input type='text' class='tbox' >"],
    options: ['Dcc'] ,
    url: {

    }
},
bo: {
    title: ["Que connais-tu du métier de la relation client ? <br> <input type='text' class='tbox' >"],
    options: ['Dcc'] ,
    url: {

    }
},
technique: {
    title: ["Que connais-tu du métier de la relation client ? <br> <input type='text' class='tbox' >"],
    options: ['Dcc'] ,
    url: {

    }
},
dcc: {
    title: ["Très bien, quelles sont tes qualités et tes compétences au quotidien qui fera de toi un bon commercial ? 💫 <br> <input type='text' class='tbox' >"],
    options: ['Suiver'] ,
    url: {

    }
},
suiver: {
    title: ["C'est noté ! Es-tu disponible à temps complet et sur du long terme ? 😊"],
    options: ['Ouii' , 'Non'],
    url: {
        
    }
},
ouii : {
    title: ["Merci #,  <br> J’ai tout ce qu’il faut pour te trouver la meilleure offre. <br> Peux-tu me communiquer ton numero de telephone ? <br> <input type='text' class='tbox' >"],
    options: ['Valide'] ,
    url: {

    }
},

valide : {
    title: ["Votre CV <br> <input type='file' id='myFile' name='cv_file' class='cv'>"],
    options: ['Enregistrer'] ,
    url: {

    }
},
enregistrer : {
    title: ["Merci pour toute c’est information Monsieur/ Madame, je prendrai contacte avec toi au cours des prochaines 24h pour te proposer la meilleure offre Merci "],
    url: {

    }
},

}

// declare variables 
let selectedOption = [];

document.getElementById("init").addEventListener("click" ,showChatBot);
var cbot= document.getElementById("chat-box");

var len1= data.chatinit.title.length ;

function showChatBot(){
    console.log(this.innerText);
    if(this.innerText=='Oui C`est parti 😊'){
        document.getElementById('test').style.display='block ';
        document.getElementById('init').innerText='Finir l`entretien';
        initChat();
    }else{
        location.reload();
    }
}


function initChat(){
    j=0;
    cbot.innerHTML='';
    for(var i=0;i<len1;i++){
        setTimeout(handleChat,(i*500));
    }
    setTimeout(function(){
        showOptions(data.chatinit.options)
    },((len1+1)*500))
}

var j=0;
function handleChat(){
   console.log(j);
   var elm= document.createElement("p");
   elm.innerHTML= data.chatinit.title[j];
   elm.setAttribute("class","msg");
   cbot.appendChild(elm);
   j++;
   handleScroll();
}

function showOptions(options){
    for(var i=0;i<options.length;i++){
        var opt= document.createElement("span");
        var inp= '<div>'+options[i]+'</div>';
        opt.innerHTML= inp;
        opt.setAttribute("class","opt");
        opt.addEventListener("click",handleOpt);
        cbot.appendChild(opt);
        handleScroll();
    }
}

function handleOpt(){
    console.log(this);
    var str= this.innerText;
    var textArr= str.split(" ");
    var findText= textArr[0];
    document.querySelectorAll(".opt").forEach(el=>{
        el.remove();
    })
    var elm= document.createElement("p");
    elm.setAttribute("class","test");
    var sp= '<span class="rep">'+findText+'</span>';
    elm.innerHTML= sp;
    cbot.appendChild(elm);

    console.log(findText.toLowerCase());
    selectedOption = findText.toLowerCase()
    var tempObj= data[findText.toLowerCase()];
    handleResults(tempObj.title,tempObj.options,tempObj.url);
    // handle ajax request
    handleAjax()
}

function handleResults(title,options,url){
    for(let i=0;i<title.length;i++){
        var elm= document.createElement("p");
        elm.innerHTML= title[i];
        elm.setAttribute("class","msg");
        cbot.appendChild(elm);
    }

    const isObjectEmpty= (url)=>{
        return JSON.stringify(url)=== "{}";
    }

    if(isObjectEmpty(url)==true){
        console.log("having more options");
        showOptions(options);
    }
    else{
        console.log("end result");
        handleOptions(options,url);
    }
}

function handleOptions(options,url){
    for(var i=0;i<options.length;i++){
        var opt= document.createElement("span");
        var inp= '<a class="m-link" href="'+url.link[i]+'">'+options[i]+'</a>';
        opt.innerHTML= inp;
        opt.setAttribute("class","opt");
        cbot.appendChild(opt);
    }
    var opt= document.createElement("span");
    var inp= '<a class="m-link" href="'+url.more+'">'+'See more</a>';

    const isObjectEmpty= (url)=>{
        return JSON.stringify(url)=== "{}";
    }

    console.log(isObjectEmpty(url));
    console.log(url);
    opt.innerHTML=inp;
    opt.setAttribute("class","opt link");
    cbot.appendChild(opt);
    handleScroll();
}

function handleScroll(){
    var elem= document.getElementById('chat-box');
    elem.scrollTop = elem.scrollHeight;
}

 






function handleAjax() {
    console.log(this)
     // Capture the selected option data
    //  var selectedOption = this.innerText;
    

    // Send the data to the server
     var xhr = new XMLHttpRequest();
     xhr.open("POST", "./save_option.php", true);
     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhr.onreadystatechange = function() {
         if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    // Handle the server's response if needed
             console.log(xhr.responseText);
         }
     };
     xhr.send("option= " + encodeURIComponent(selectedOption));
     xhr.send("first_name="+first_name_variable+"&last_name="+last_name+"&education_level="+x_variable+"&french_level="+x_variable+"&experience="+x_variable+"&call_center="+x_variable+"&duration="+x_variable+"&knowledge="+x_variable+"&qualities="+x_variable+"&availability="+x_variable+"&phone_number="+x_variable+"&cv_file="+x_variable);
 }

// Call the handleAjax function when needed, for example:
var optionElement = document.getElementById("optionElement"); // Replace "optionElement" with the actual element ID
optionElement.addEventListener("click", handleAjax);


//  function isSelection() {
//     var selection = window.getSelection();
//     return selection.type === 'Range' && selection.rangeCount > 0;
//   }
  
//   function handleSelection() {
//     if (isSelection()) {
//       var selectedText = window.getSelection().toString();
//       console.log(selectedText);
//       // Perform further operations with the selected text
//     }
//   }
  
