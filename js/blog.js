window.addEventListener("load", showNews);

function showNews(){
    fetch('https://oc-jswebsrv.herokuapp.com/api/articles').then(function(res){
        return res.json();
    }).then(function(res){
       
        const apiResult = res;
        const container = document.getElementById('news');
          

          apiResult.forEach((result) => {
            // Create card
            const card = document.createElement('div');
            card.classList = 'card-body';

            // card content
            const content = `
            <div class="card m-3 p-0" style="width: 18rem;">
                <img src="https://picsum.photos/300/" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">${result.titre}</h5>
                <p class="card-text">${result.contenu}</p>
                <p class="small"><em>${result.id}</em></p>
                 
                </div>
              </div>
            </div>
            `;
          
            // show the card in the html div
            container.innerHTML += content;
          })


















        //  // get the value for the table header and store it to an array. 
        // let col = [];
        // for (let i = 0; i < array.length; i++) {
        //     for (let key in array[i]) {
        //         if (col.indexOf(key) === -1) {
        //             // console.log(key);
        //             col.push(key);
        //         }
        //     }
        // }

        // // create the table and add classes.
        // let table = document.createElement("table");
        // table.classList.add('table');

        // // create the header.

        // let tr = table.insertRow(-1);                   

        // for (let i = 0; i < col.length; i++) {
        //     let th = document.createElement("th");
        //     th.innerHTML = col[i];
        //     tr.appendChild(th);
        // }

        // // add the json to the table creating rows.
        // for (let i = 0; i < array.length; i++) {

        //     tr = table.insertRow(-1);

        //     for (let j = 0; j < col.length; j++) {
        //         let tableCell = tr.insertCell(-1);
        //         tableCell.innerHTML = array[i][col[j]];
        //     }
        // }

        // // add the table to a div
        // var divContainer = document.getElementById("showData");
        // divContainer.innerHTML = "";
        // divContainer.appendChild(table);

    });

}