window.onload = () => {

//     const BASE_URL = "http://127.0.0.1:8000/";
//     const SUB_URLS = ["bier/", "gisting/", "bier/Hoegaarden wit/", "bier/Hoegaarden wit/biersoort/", "gisting/Lage gisting/biersoorten/"];

//     const getData = (SUB_URL) => {
//         for(let i = 0; i < SUB_URLS.length; i++){
//             fetch(BASE_URL + SUB_URLS[i])
//             .then((data) => {
//                 return data.text();
//             })
//             .then((response) => {
//                 console.log(response);
//             })
//         }
//     };
//     getData(SUB_URLS);

    const deleteButton = document.getElementById('js--delete');
    const editForm = document.getElementById('js--editForm');
    
    deleteButton.onclick = () => {
        editForm.setAttribute("method", "PUT")
    }

}

//http://127.0.0.1:8000/bier/Hoegaarden%20wit/biersoort