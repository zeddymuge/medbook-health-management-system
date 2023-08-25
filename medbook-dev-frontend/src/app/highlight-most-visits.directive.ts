import { Directive, ElementRef, Input, OnInit } from '@angular/core';

@Directive({
  selector: '[appHighlightMostVisits]'
})
export class HighlightMostVisitsDirective implements OnInit {
  @Input() appHighlightMostVisits: boolean;

  constructor(private el: ElementRef) {}

  ngOnInit() {
    if (this.appHighlightMostVisits) {
      this.el.nativeElement.style.backgroundColor = 'yellow';
    }
  }
}
