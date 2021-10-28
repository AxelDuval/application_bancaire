window.addEventListener("load", showRates);
let tableTitles = [
    "Banque",
    "Taux d'intérêts",
    "Frais de dossier"
];

function showRates(){
    
    fetch('data/taux.json').then(function(res){
        return res.json();
    }).then(function(res){
        console.log(res);
        let table = document.createElement('table');
        let thead = document.createElement('thead');
        let tableTitle = document.createElement("tr");
        let tr = document.createElement("tr");
        let td = document.createElement("td");
        let thTitle = document.createElement("th");
        let tbody = document.createElement("tbody");
       
        tableTitle.setAttribute('id', 'tableTitle');
        table.classList.add('table');
       
        for (title of tableTitles){
            tableTitle.innerHTML += `<th scope='col'>${title}</th>`;
        }

        tableTitle.appendChild(thTitle);
        thead.appendChild(tableTitle);
        table.appendChild(thead);
        table.appendChild(tbody);
        document.body.appendChild(table);
        tbody.append(tr, td);



        for(let elements in res){
            // console.log(res[elements]);

            for(let index in res[elements]){
            // console.log(index);
            console.log(res[elements]);
            let value = res[elements][index];
            // console.log(res[elements][index]);
            // console.log(value);
            tr.innerHTML += `<td>${value}</td>`;
            }
                for(let i in value){
               
                } 

        

        }    
    });

}