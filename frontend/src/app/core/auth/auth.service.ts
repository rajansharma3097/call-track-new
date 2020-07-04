import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private baseUrl = 'http://localhost:8000/api';


  constructor(private http: HttpClient) {}

  signup(payLoad) {
    return this.http.post(`${this.baseUrl}/signup`, payLoad)
  }

  login(payLoad) {
    return this.http.post(`${this.baseUrl}/login`, payLoad);
  }

}
