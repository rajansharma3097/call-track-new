import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private baseUrl = environment.apiUrl;


  constructor(private http: HttpClient) {}

  signup(payLoad) {
    return this.http.post(`${this.baseUrl}/signup`, payLoad)
  }

  login(payLoad) {
    return this.http.post(`${this.baseUrl}/login`, payLoad);
  }

}
