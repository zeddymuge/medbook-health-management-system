import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
@Component({
  selector: 'app-patient-form',
  templateUrl: './patient-form.component.html',
  styleUrls: ['./patient-form.component.scss'],
})
export class PatientFormComponent {
  name: string = '';
  dob: string = '';
  gender: string = '';
  service: string = '';
  comments: string = '';

  constructor(private apiService: ApiService) {}

  savePatient() {
    const patient = {
      name: this.name,
      dob: this.dob,
      gender: this.gender,
      service: this.service,
      comments: this.comments,
    };

    this.apiService.createPatient(patient).subscribe(() => {
      // Data saved successfully, perform any additional actions if needed
    });
  }
}