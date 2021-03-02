import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Fabricante } from './Fabricante';

@Injectable({
  providedIn: 'root'
})
export class ClientelaravelService {

  URL = "http://localhost:8000/api/fabricante";

  constructor(private httpc: HttpClient) {

  }

  getFabricantes(): Observable<Fabricante[]> {

    return this.httpc.get<Fabricante[]>(this.URL); 
  }

  addFabricante(nombreF:string, telefonoF:string)
  {
    let objetoFabricante = {nombre: nombreF,telefono:telefonoF}
     return this.httpc.post(this.URL,objetoFabricante);
  }

  editFabricante(nombreF:string, telefonoF:string,idFabricante:number)
  {
      let obj ={nombre:nombreF,telefono:telefonoF}
      
      return this.httpc.put(`${this.URL}/${idFabricante}`,obj)
      
  }

  deleteFabricante(idFabricante:number)
  { 
    return this.httpc.delete(`${this.URL}/${idFabricante}`)
  }

  
  getFabricanteById(idFabricante:number)
  {
    
    return this.httpc.get<Fabricante>(`${this.URL}/${idFabricante}`);
  }


  

}