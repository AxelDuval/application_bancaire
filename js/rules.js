let rules = document.getElementById('rules');
let rulesBtn = document.getElementById('accept');
let rulesContent = document.getElementById('rulesContent');
let rulesTitle = document.getElementById('rulesTitle');



function hideRules(){
    rules.classList.add('displayNone');
}


window.addEventListener("load", showRules);


function showRules(){
    fetch('data/security_rules.json').then(function(res){
        return res.json();
    }).then(function(res){
        rulesTitle.innerText = res.title;
        rulesContent.innerText = res.content;
        console.log(res);
        // for (let pokemon of res.results){
        //    pokeList.innerHTML += `<li>${pokemon.name}</li>`;
        // }
    })
}