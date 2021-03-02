import { TestBed } from '@angular/core/testing';

import { ClientelaravelService } from './clientelaravel.service';

describe('ClientelaravelService', () => {
  let service: ClientelaravelService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ClientelaravelService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
