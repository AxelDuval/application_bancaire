window.addEventListener("load", showRules);

function showRules(){
    let rulesBtn = document.createElement('button');
    rulesBtn.setAttribute("id", "accept");
    rulesBtn.classList.add("btn", "btn-primary", "text-right");

    let divAccept = document.createElement('div');
    divAccept.setAttribute("id", "divAccept");

    let rulesContent = document.createElement('p');
    rulesContent.setAttribute("id", "rulesContent");

    let rulesTitle = document.createElement('h3');
    rulesTitle.setAttribute("id", "rulesTitle");

    let toRead = document.createElement('div');
    toRead.setAttribute("id", "toRead");

    let rules = document.createElement('div');
    rules.setAttribute("id", "rules");

    divAccept.appendChild(rulesBtn);
    toRead.appendChild(rulesTitle);
    toRead.appendChild(rulesContent);
    toRead.appendChild(divAccept);

    rules.appendChild(toRead);

    document.body.appendChild(rules);

    fetch('data/security_rules.json').then(function(res){
        return res.json();
    }).then(function(res){
        rulesTitle.innerText = res.title;
        rulesContent.innerText = res.content; 
        rulesBtn.innerText = res.button;      
    });

    rulesBtn.addEventListener('click', function() {
        rules.classList.add('displayNone');
    });
}