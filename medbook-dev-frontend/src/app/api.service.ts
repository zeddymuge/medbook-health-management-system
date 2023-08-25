import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
// import { HttpClientModule } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private apiUrl = 'http://127.0.0.1:8000/';

  constructor(private http: HttpClient) {}

  createPatient(patient: any) {
    return this.http.post(`${this.apiUrl}/patients`, patient);
  }

  getPatients() {
    return this.http.get(`${this.apiUrl}/patients`);
  }
}