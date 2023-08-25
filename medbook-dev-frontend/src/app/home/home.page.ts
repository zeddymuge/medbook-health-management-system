import { Component } from '@angular/core';
import { IonicModule } from '@ionic/angular';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: true,
  imports: [IonicModule],
})
export class HomePage {
  constructor(private apiService: ApiService) {}

  patients: any[] = [];
 
  ngOnInit() {
    this.apiService.getPatients().subscribe((data: any) => {
      this.patients = data;
    });
  }
}
