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
          
            // show the card in the html 
            container.innerHTML += content;
          })

    });

}