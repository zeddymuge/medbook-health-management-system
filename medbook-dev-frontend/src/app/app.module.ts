import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicModule } from '@ionic/angular';
import { HttpClientModule } from '@angular/common/http'; // Import HttpClientModule
import { AppComponent } from './app.component';
import { DateFormatPipe } from './date-format.pipe';
import { HighlightMostVisitsDirective } from './highlight-most-visits.directive';

@NgModule({
  declarations: [AppComponent, DateFormatPipe, HighlightMostVisitsDirective],
  imports: [BrowserModule, IonicModule.forRoot(), HttpClientModule], // Add HttpClientModule
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
