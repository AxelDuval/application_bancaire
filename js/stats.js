window.addEventListener("load", showRates);

function showRates(){
    
    fetch('data/taux.json').then(function(res){
        return res.json();
    }).then(function(res){
        let array = res;
        console.log(array);

         // get the value for the table header and store it to an array. 
        let col = [];
        for (let i = 0; i < array.length; i++) {
            for (let key in array[i]) {
                if (col.indexOf(key) === -1) {
                    // console.log(key);
                    col.push(key);
                }
            }
        }

        // create the table and add classes.
        let table = document.createElement("table");
        table.classList.add('table');

        // create the header.

        let tr = table.insertRow(-1);                   

        for (let i = 0; i < col.length; i++) {
            let th = document.createElement("th");
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // add the json to the table creating rows.
        for (let i = 0; i < array.length; i++) {

            tr = table.insertRow(-1);

            for (let j = 0; j < col.length; j++) {
                let tableCell = tr.insertCell(-1);
                tableCell.innerHTML = array[i][col[j]];
            }
        }

        // add the table to a div
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);

    });

}