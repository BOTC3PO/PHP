






class Model {
    constructor() {
      this.dataJSON = "fetching";
      this.getData();
    }
  
    setController(controller) {
      this.controller = controller;
    }
  
    async getData() {
    const response = await fetch('src/DB/basedata.json');
      const responseJSON = await response.json();
      this.dataJSON = responseJSON;
    }
  }
let dato = new Model;
   
console.log(dato);
  
console.log("Esperando a que pasen 3 segundos para asegurar que la información llegó.");
setTimeout(() => {
 // console.log(dato.dataJSON[0].color);

if(dato.dataJSON[0].color=="true"){
    console.log("Si, funciona...");
    alert("base de datos cargada")
}
}, 3000);







