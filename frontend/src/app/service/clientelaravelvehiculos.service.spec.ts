import { TestBed } from '@angular/core/testing';

import { ClientelaravelvehiculosService } from './clientelaravelvehiculos.service';

describe('ClientelaravelvehiculosService', () => {
  let service: ClientelaravelvehiculosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ClientelaravelvehiculosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
